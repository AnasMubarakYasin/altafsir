import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: 'id',
        label: 'id',
        field: 'id',
        input: "text",
        align: "left"
    },
    {
        name: 'name',
        label: 'Kategory',
        field: 'name',
        input: "text",
        align: "left"
    },

];
const api: TableApi = {
    create: route("api.kategory.create"),
    update: (id) => route("api.kategory.update", { kategory: id }),
    delete: (ids) => route("api.kategory.delete", { "id": ids }),
}

export { definitions, api };
