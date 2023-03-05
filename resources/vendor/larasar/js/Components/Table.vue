<script setup>
import { computed, reactive, ref } from "vue";
import Layout from "@larasar/js/Layouts/Panel.vue";
import {
    symRoundedArrowDropUp,
    symRoundedArrowDropDown,
    symRoundedFilterList,
    symRoundedViewColumn,
    symRoundedCheckBox,
    symRoundedGridView,
    symRoundedViewAgenda,
    symRoundedEdit,
    symRoundedAdd,
    symRoundedRemove,
    symRoundedClose,
} from "@quasar/extras/material-symbols-rounded";
import { useQuasar } from "quasar";
import { router, Link, useForm } from "@inertiajs/vue3";

const $props = defineProps({
    data: {
        default: () => [],
        type: Array,
        required: true,
    },
    definitions: {
        default: () => [],
        type: Array,
        required: true,
    },
    api: {
        default: () => ({
            update: "/",
            create: "/",
            delete: "/",
        }),
        type: Object,
        required: true,
    },
});
const $quasar = useQuasar();
const separator = ref("vertical");
const cols = ref($props.definitions);
const rows = ref($props.data);
const loading = ref(false);
const filter_data = reactive(gen_columns($props.definitions));
const create_data = reactive(gen_columns($props.definitions));
const grid_mode = ref(false);
const select_mode = ref(false);
const edit_mode = ref(false);
const create_mode = ref(false);
const delete_confirm = ref(false);
const selected = ref([]);
const selected_columns = reactive(gen_columns($props.definitions, true));
const visible_columns = computed(() => {
    return Object.keys(selected_columns).filter((key) => selected_columns[key]);
});
function filtering() {
    rows.value = $props.data.filter((row) => {
        for (const key of Object.keys(filter_data)) {
            if (filter_data[key] !== null) {
                if (typeof filter_data[key] == "string") {
                    return new RegExp(`.*${filter_data[key]}.*`, "im").test(
                        row[key]
                    );
                } else {
                    return filter_data[key] == row[key];
                }
            }
        }
        return false;
    });
}
function selected_label() {
    return selected.value.length === 0
        ? ""
        : `${selected.value.length} record${
              selected.value.length > 1 ? "s" : ""
          } selected of ${rows.length}`;
}
function toggle_edit_mode() {
    edit_mode.value = !edit_mode.value;
    $quasar.notify({
        group: edit_mode.value ? "e" : "d",
        message: "Edit Mode " + (edit_mode.value ? "Enable" : "Disable"),
    });
}
async function handle_create() {
    loading.value = true;
    try {
        // await axios.get("/sanctum/csrf-cookie");
        await axios.post($props.api.create, create_data);
    } catch (error) {
        console.log(error);
        $quasar.notify({
            group: "create",
            message: "Failed Create Data",
            color: "negative",
        });
    } finally {
        loading.value = false;
        create_mode.value = false;
    }
}
async function handle_update(row, key, value, initial_value) {
    loading.value = true;
    try {
        // await axios.get("/sanctum/csrf-cookie");
        await axios.patch($props.api.update(row.id), {
            [key]: value,
        });
    } catch (error) {
        console.log(error);
        $quasar.notify({
            group: "update",
            message: "Failed Update Data",
            color: "negative",
        });
    } finally {
        loading.value = false;
    }
}
async function handle_delete() {
    console.log(selected.value)
    loading.value = true;
    try {
        // await axios.get("/sanctum/csrf-cookie");
        await axios.delete($props.api.delete(selected.value.map((v) => v.id)));
        selected.value = [];
    } catch (error) {
        console.log(error);
        $quasar.notify({
            group: "delete",
            message: "Failed Delete Data",
            color: "negative",
        });
    } finally {
        loading.value = false;
    }
}
function log($event) {
    console.log($event);
}
function gen_columns(arr = [], v = null) {
    const obj = {};
    for (const it of arr) {
        Object.defineProperty(obj, it.name, {
            configurable: true,
            enumerable: true,
            writable: true,
            value: v,
        });
    }
    return obj;
}
</script>
<style lang="sass">
.sticky-header
  width: 100%
  height: 100%
  overflow: hidden
  td:first-child
    background-color: white
  tr th
    position: sticky
    z-index: 2
    background: #fff
  thead tr:last-child th
    top: 48px
    z-index: 3
  thead tr:first-child th
    top: 0
    z-index: 1
  tr:first-child th:first-child
    z-index: 3
  td:first-child
    z-index: 1
  td:first-child, th:first-child
    position: sticky
    left: 0
</style>
<template>
    <Layout>
        <q-table
            class="sticky-header"
            title="Table"
            :columns="cols"
            :rows="rows"
            row-key="id"
            :selected-rows-label="selected_label"
            :separator="separator"
            selection="multiple"
            v-model:selected="selected"
            :visible-columns="visible_columns"
            :loading="loading"
            binary-state-sort
            :grid="grid_mode"
        >
            <template v-slot:top>
                <div class="flex gap-2">
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        class="bg-gray-200 dark:bg-gray-400 text-gray-800 rounded-xl"
                        :icon="symRoundedFilterList"
                    >
                        <q-tooltip> Filters </q-tooltip>
                        <q-menu>
                            <q-form
                                @submit.prevent="filtering"
                                class="grid gap-2 p-2"
                            >
                                <template v-for="column of definitions">
                                    <q-input
                                        :type="column.type"
                                        v-model="filter_data[column.name]"
                                        :label="column.label"
                                        clearable
                                    />
                                </template>
                                <q-btn
                                    type="submit"
                                    class="bg-blue-500 dark:bg-blue-400 text-white"
                                    >Filter</q-btn
                                >
                            </q-form>
                        </q-menu>
                    </q-btn>
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        class="bg-gray-200 dark:bg-gray-400 text-gray-800 rounded-xl"
                        :icon="symRoundedViewColumn"
                    >
                        <q-tooltip> Columns </q-tooltip>
                        <q-menu>
                            <template v-for="column of definitions">
                                <div
                                    v-if="column.name in selected_columns"
                                    class="p-2 pr-4"
                                >
                                    <q-checkbox
                                        :label="column.label"
                                        v-model="selected_columns[column.name]"
                                    />
                                </div>
                            </template>
                        </q-menu>
                    </q-btn>
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        class="bg-gray-200 dark:bg-gray-400 text-gray-800 rounded-xl"
                        :icon="
                            grid_mode
                                ? symRoundedViewAgenda
                                : symRoundedGridView
                        "
                        @click="grid_mode = !grid_mode"
                    >
                        <q-tooltip> View </q-tooltip>
                    </q-btn>

                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        :class="
                            !select_mode
                                ? 'bg-gray-200 dark:bg-gray-400 text-gray-800 rounded-xl'
                                : 'bg-blue-500 dark:bg-blue-400 text-white rounded-xl'
                        "
                        :icon="symRoundedCheckBox"
                        @click="select_mode = !select_mode"
                        :disable="edit_mode"
                    >
                        <q-tooltip> Selection </q-tooltip>
                    </q-btn>
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        :class="
                            !edit_mode
                                ? 'bg-gray-200 dark:bg-gray-400 text-gray-800 rounded-xl'
                                : 'bg-blue-500 dark:bg-blue-400 text-white rounded-xl'
                        "
                        :icon="symRoundedEdit"
                        @click="toggle_edit_mode"
                        :disable="select_mode"
                    >
                        <q-tooltip> Editable </q-tooltip>
                    </q-btn>
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        class="bg-blue-500 dark:bg-blue-400 text-white rounded-xl"
                        :icon="symRoundedAdd"
                        @click="create_mode = !create_mode"
                    >
                        <q-tooltip> Create </q-tooltip>
                    </q-btn>
                    <q-btn
                        unelevated
                        square
                        padding="sm"
                        class="bg-red-500 dark:bg-red-400 text-white rounded-xl"
                        :icon="symRoundedRemove"
                        :disabled="!select_mode || selected.length == 0"
                        @click="delete_confirm = !delete_confirm"
                    >
                        <q-tooltip> Remove </q-tooltip>
                    </q-btn>
                </div>
                <q-space />
            </template>
            <template v-if="!select_mode" v-slot:header="props">
                <q-tr :props="props">
                    <q-th
                        v-for="col in props.cols"
                        :key="col.name"
                        :props="props"
                        class="text-base font-semibold"
                    >
                        {{ col.label }}
                    </q-th>
                </q-tr>
            </template>
            <template v-if="!select_mode" v-slot:body="props">
                <q-tr :props="props">
                    <template v-for="col of props.cols" :key="col.name">
                        <q-td :props="props">
                            {{ props.row[col.name] }}
                            <q-popup-edit
                                v-if="edit_mode"
                                v-model="props.row[col.name]"
                                buttons
                                label-set="Save"
                                label-cancel="Candel"
                                v-slot="scope"
                                @save="
                                    (v, iv) =>
                                        handle_update(
                                            props.row,
                                            col.name,
                                            v,
                                            iv
                                        )
                                "
                            >
                                <q-input
                                    :type="col.type"
                                    v-model="scope.value"
                                    autofocus
                                />
                            </q-popup-edit>
                        </q-td>
                    </template>
                </q-tr>
            </template>
            <template v-slot:body-selection="scope">
                <q-checkbox
                    :model-value="scope.selected"
                    @update:model-value="
                        (val, evt) => {
                            Object.getOwnPropertyDescriptor(
                                scope,
                                'selected'
                            ).set(val, evt);
                        }
                    "
                />
            </template>
        </q-table>
        <q-dialog v-model="create_mode">
            <q-card class="w-[400px]">
                <q-card-section class="row items-center q-pb-none">
                    <div class="text-h6">Form</div>
                    <q-space />
                    <q-btn
                        :icon="symRoundedClose"
                        flat
                        round
                        dense
                        v-close-popup
                    />
                </q-card-section>
                <q-card-section>
                    <q-form @submit.prevent="handle_create" class="grid gap-2 p-2">
                        <template
                            v-for="column of definitions.filter(
                                (item) => item.name != 'id'
                            )"
                        >
                            <q-input
                                :type="column.type"
                                v-model="create_data[column.name]"
                                :label="column.label"
                            />
                        </template>
                        <q-btn
                            type="submit"
                            class="bg-blue-500 dark:bg-blue-400 text-white"
                        >
                            Create
                        </q-btn>
                    </q-form>
                </q-card-section>
            </q-card>
        </q-dialog>
        <q-dialog v-model="delete_confirm" persistent>
            <q-card>
                <q-card-section class="row items-center">
                    <span class="">
                        Are you sure want to delete ({{ selected.length }})
                        items?
                    </span>
                </q-card-section>

                <q-card-actions align="right">
                    <q-btn
                        flat
                        label="Yes"
                        color="primary"
                        @click="handle_delete"
                        v-close-popup
                    />
                    <q-btn flat label="Cancel" v-close-popup />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </Layout>
</template>
