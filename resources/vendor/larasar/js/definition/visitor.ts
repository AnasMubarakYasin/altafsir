import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: "created_at",
        label: "Logged At",
        field: "created_at",
        input: "datetime",
        align: "center",
    },
];
const api: TableApi = {
    create: "",
    update: (id) => "",
    delete: (ids) => "",
}

export { definitions, api };
