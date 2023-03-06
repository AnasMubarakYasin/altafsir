import zroute, { RouteParamsWithQueryOverload } from 'ziggy-js';
let default_routes = null;
export async function get_routes() {
    const response = await fetch('/api/ziggy');
    const routes = await response.json();
    default_routes ||= routes;
    return routes;
}
export default default_routes;
export function route(name: string, params?: RouteParamsWithQueryOverload) {
    return zroute(name, params, undefined, default_routes)
}
