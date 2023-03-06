import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: "photo",
        label: "Photo",
        field: "photo",
        input: "text"
    },
    {
        name: "name",
        label: "Name",
        field: "name",
        input: "text"
    },
    {
        name: "email",
        label: "Email",
        field: "email",
        input: "text"
    },
];
const api: TableApi = {
    create: "",
    update: (id) => "",
    delete: (ids) => "",
}


export { definitions, api };
