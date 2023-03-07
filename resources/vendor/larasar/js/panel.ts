import PanelBase, { Feature, Menu, Action, State, Accountable } from "@larasar/js/lib/panel";
import {
    symRoundedDashboard,
    symRoundedGroup,
    symRoundedLogout,
    symRoundedMenuBook,
    symRoundedFiberSmartRecord,
    symRoundedGroups,
    symRoundedQueryStats,
} from "@quasar/extras/material-symbols-rounded";
import { route } from "./lib/ziggy.js";
// @ts-ignore
import { router } from "@inertiajs/vue3";

export default class Panel extends PanelBase {
    name = "Panel"
    version = "1.0.0"
    brand = "/logo.png"
    features: Feature[] = []
    get_features() {
        return this.features
    }
    get_side_menu(): Menu[] {
        return [
            {
                name: "Dashboard",
                icon: symRoundedDashboard,
                index: route("web.panel.dashboard"),
            },
            {
                tag: "Data",
                name: "Alquran",
                icon: symRoundedMenuBook,
                index: route("web.panel.alquran.index"),
                sub: [
                    {
                        name: "Surah",
                        index: route("web.panel.alquran.surah.index"),
                    },
                    {
                        name: "Ayat",
                        index: route("web.panel.alquran.ayat.index"),
                    },
                    {
                        name: "Tafsir",
                        index: route("web.panel.alquran.tafsir.index"),
                    },
                ]
            },
            {
                tag: "Analitycs",
                name: "Visitor",
                icon: symRoundedGroups,
                index: route("web.panel.analitycs.visitor.index"),
            },
            {
                name: "Searcher",
                icon: symRoundedQueryStats,
                index: route("web.panel.analitycs.searcher.index"),
            },
            {
                tag: "Accounts",
                name: "Users",
                icon: symRoundedGroup,
                index: route("web.panel.users.index"),
            },
        ]
    }
    get_top_menu(): Menu[] {
        return [
            {
                name: "Profile",
                icon: symRoundedDashboard,
                index: route("web.panel.dashboard"),
            },
            {
                tag: "Accounts",
                name: "Users",
                icon: symRoundedGroup,
                index: route("web.panel.users.index"),
            },
            {
                name: "Sign Out",
                icon: symRoundedLogout,
                index: "",
                onclick(event) {
                    router.post(route('api.entry.signout'));
                }
            }
        ]
    }
    get_account(): Accountable {
        return {
            name: "Manager",
            desc: "administrator",
        }
    }
}
