import { Entry } from "@larasar/js/lib/type"

const entries: Entry[] = [
    {
        name: "Guest",
        guest: true,
        visit() {
            return "/"
        }
    },
    {
        name: "Panel",
        guest: false,
        visit() {
            return "/panel"
        },
        index() {
            return "/entry"
        },
        signin() {
            return "/entry/signin"
        },
        signup() {
            return "/entry/signup"
        },
        accounts() {
            return [
                {
                    name: "super",
                    password: "super",
                    remember: true,
                }
            ]
        }
    },
]

export default entries
