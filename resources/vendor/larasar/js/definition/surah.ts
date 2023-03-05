import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: 'number',
        label: 'Number',
        field: 'number',
        input: "number",
    },
    {
        name: 'name_arab',
        label: 'Name arab',
        field: 'name_arab',
        input: "text",
    },
    {
        name: 'name_latin',
        label: 'Name latin',
        field: 'name_latin',
        input: "text",
    },
    {
        name: 'ayat_count',
        label: 'Ayat count',
        field: 'ayat_count',
        input: "number",
    },
    {
        name: 'place',
        label: 'Place',
        field: 'place',
        input: "text",
    },
    {
        name: 'translate',
        label: 'Translate',
        field: 'translate',
        input: "text",
    },
    {
        name: 'description',
        label: 'Description',
        field: 'description',
        input: "textarea",
    },

];
const api: TableApi = {
    create: route("api.surah.create"),
    update: (id) => route("api.surah.update", { surah: id }),
    delete: (ids) => route("api.surah.delete", { "id": ids }),
}

export { definitions, api };
