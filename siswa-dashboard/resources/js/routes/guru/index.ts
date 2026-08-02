import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
import portfolioE55e31 from './portfolio'
/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
export const dashboard = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

dashboard.definition = {
    methods: ["get","head"],
    url: '/guru/dashboard',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
dashboard.url = (options?: RouteQueryOptions) => {
    return dashboard.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
dashboard.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
dashboard.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: dashboard.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
const dashboardForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
dashboardForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\DashboardController::dashboard
* @see app/Http/Controllers/Guru/DashboardController.php:10
* @route '/guru/dashboard'
*/
dashboardForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

dashboard.form = dashboardForm

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
export const portfolio = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: portfolio.url(options),
    method: 'get',
})

portfolio.definition = {
    methods: ["get","head"],
    url: '/guru/portfolio',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
portfolio.url = (options?: RouteQueryOptions) => {
    return portfolio.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
portfolio.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: portfolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
portfolio.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: portfolio.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
const portfolioForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portfolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
portfolioForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portfolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Guru\PortfolioController::portfolio
* @see app/Http/Controllers/Guru/PortfolioController.php:12
* @route '/guru/portfolio'
*/
portfolioForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portfolio.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

portfolio.form = portfolioForm

const guru = {
    dashboard: Object.assign(dashboard, dashboard),
    portfolio: Object.assign(portfolio, portfolioE55e31),
}

export default guru