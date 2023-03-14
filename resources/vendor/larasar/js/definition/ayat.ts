import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: "number",
        label: "Number",
        field: "number",
        input: "number"
    },
    // {
    //     name: "kategorie_id",
    //     label: "Kategori ID",
    //     field: "kategorie_id",
    //     input: "text"
    // },
    {
        name: "text_id",
        label: "Text Id",
        field: "text_id",
        input: "text"
    },
    {
        name: "text_arab",
        label: "Text Arab",
        field: "text_arab",
        input: "text"
    },
    {
        name: "text_latin",
        label: "Text Latin",
        field: "text_latin",
        input: "text"
    },
    {
        name: "audios",
        label: "Audios",
        field: "audios",
        input: "text"
    },
];
const api: TableApi = {
    create: route("api.ayat.create"),
    update: (id) => route("api.ayat.update", { ayat: id }),
    delete: (ids) => route("api.ayat.delete", { "id": ids }),
}

export { definitions, api };
