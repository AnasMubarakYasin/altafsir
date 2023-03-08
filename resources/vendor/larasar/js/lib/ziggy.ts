import zroute, { RouteParamsWithQueryOverload } from 'ziggy-js';
const response = await fetch('/api/ziggy');
let default_routes = await response.json();
export default default_routes;
export function route(name: string, params?: RouteParamsWithQueryOverload) {
    return zroute(name, params, undefined, default_routes)
}
