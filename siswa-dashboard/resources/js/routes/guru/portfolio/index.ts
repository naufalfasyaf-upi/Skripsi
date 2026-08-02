import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Guru\PortfolioController::store
* @see app/Http/Controllers/Guru/PortfolioController.php:43
* @route '/guru/portfolio'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/guru/portfolio',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Guru\PortfolioController::store
* @see app/Http/Controllers/Guru/PortfolioController.php:43
* @route '/guru/portfolio'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Guru\PortfolioController::store
* @see app/Http/Controllers/Guru/PortfolioController.php:43
* @route '/guru/portfolio'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::store
* @see app/Http/Controllers/Guru/PortfolioController.php:43
* @route '/guru/portfolio'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::store
* @see app/Http/Controllers/Guru/PortfolioController.php:43
* @route '/guru/portfolio'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

const portfolio = {
    store: Object.assign(store, store),
}

export default portfolio