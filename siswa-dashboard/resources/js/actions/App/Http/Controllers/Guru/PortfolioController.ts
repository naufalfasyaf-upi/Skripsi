import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/guru/portfolio',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::index
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
indexForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

index.form = indexForm

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

const PortfolioController = { index, store }

export default PortfolioController