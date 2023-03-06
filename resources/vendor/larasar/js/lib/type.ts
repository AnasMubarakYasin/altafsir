import type Panel from "./panel"

export interface Entriable {
    to_entry(): Entry
}
export interface Panelable {
    to_panel(): Panel
}
export interface Credential {
    name: string
    password: string
    remember: boolean
}
export interface Entry {
    name: string
    guest: boolean
    signin?: () => string
    signup?: () => string
    index?: () => string
    forgot_password?: () => string
    visit(): string
    accounts?: () => Array<Credential>
}
export interface TableDef {
    name: string
    label: string
    field: string | (() => string)
    input: "text" | "textarea" | "number";
    required?: boolean
    align?: 'left' | 'center' | 'right'
    sortable?: boolean
    sort?: (a, b, rowA, rowB) => any
    sortOrder?: 'ad' | 'da'
    format?: (val, row) => any
    style?: string;
    classes?: string;
    headerStyle?: string;
    headerClasses?: string;
}
export interface TableApi {
    create: string;
    update: (...p: any) => string;
    delete: (...p: any) => string;
}
