import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: "number",
        label: "Number",
        field: "number",
        input: "number"
    },
    {
        name: "ayat_id",
        label: "Ayat ID",
        field: "ayat_id",
        input: "text"
    },
    {
        name: "text",
        label: "Text",
        field: "text",
        input: "text",
        align: 'left',
    },
];
const api: TableApi = {
    create: route("api.tafsir.create"),
    update: (id) => route("api.tafsir.update", { tafsir: id }),
    delete: (ids) => route("api.tafsir.delete", { "id": ids }),
}

export { definitions, api };
