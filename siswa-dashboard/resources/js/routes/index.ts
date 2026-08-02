import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../wayfinder'
/**
* @see routes/web.php:21
* @route '/login'
*/
export const login = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})

login.definition = {
    methods: ["get","head"],
    url: '/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see routes/web.php:21
* @route '/login'
*/
login.url = (options?: RouteQueryOptions) => {
    return login.definition.url + queryParams(options)
}

/**
* @see routes/web.php:21
* @route '/login'
*/
login.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})

/**
* @see routes/web.php:21
* @route '/login'
*/
login.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: login.url(options),
    method: 'head',
})

/**
* @see routes/web.php:21
* @route '/login'
*/
const loginForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: login.url(options),
    method: 'get',
})

/**
* @see routes/web.php:21
* @route '/login'
*/
loginForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: login.url(options),
    method: 'get',
})

/**
* @see routes/web.php:21
* @route '/login'
*/
loginForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: login.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

login.form = loginForm

/**
* @see \App\Http\Controllers\AuthController::logout
* @see app/Http/Controllers/AuthController.php:41
* @route '/logout'
*/
export const logout = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

logout.definition = {
    methods: ["post"],
    url: '/logout',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\AuthController::logout
* @see app/Http/Controllers/AuthController.php:41
* @route '/logout'
*/
logout.url = (options?: RouteQueryOptions) => {
    return logout.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\AuthController::logout
* @see app/Http/Controllers/AuthController.php:41
* @route '/logout'
*/
logout.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\AuthController::logout
* @see app/Http/Controllers/AuthController.php:41
* @route '/logout'
*/
const logoutForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: logout.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\AuthController::logout
* @see app/Http/Controllers/AuthController.php:41
* @route '/logout'
*/
logoutForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: logout.url(options),
    method: 'post',
})

logout.form = logoutForm

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
export const register = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})

register.definition = {
    methods: ["get","head"],
    url: '/register',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
register.url = (options?: RouteQueryOptions) => {
    return register.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
register.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
register.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: register.url(options),
    method: 'head',
})

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
const registerForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: register.url(options),
    method: 'get',
})

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
registerForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: register.url(options),
    method: 'get',
})

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
* @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
* @route '/register'
*/
registerForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: register.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

register.form = registerForm

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
export const dashboard = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

dashboard.definition = {
    methods: ["get","head"],
    url: '/dashboard',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
dashboard.url = (options?: RouteQueryOptions) => {
    return dashboard.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
dashboard.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
dashboard.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: dashboard.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
const dashboardForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
*/
dashboardForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: dashboard.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\DashboardController::dashboard
* @see app/Http/Controllers/DashboardController.php:9
* @route '/dashboard'
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
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
export const portofolio = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: portofolio.url(options),
    method: 'get',
})

portofolio.definition = {
    methods: ["get","head"],
    url: '/portofolio',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
portofolio.url = (options?: RouteQueryOptions) => {
    return portofolio.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
portofolio.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: portofolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
portofolio.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: portofolio.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
const portofolioForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portofolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
portofolioForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portofolio.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\PortfolioController::portofolio
* @see app/Http/Controllers/PortfolioController.php:10
* @route '/portofolio'
*/
portofolioForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: portofolio.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

portofolio.form = portofolioForm

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
export const analisis = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: analisis.url(options),
    method: 'get',
})

analisis.definition = {
    methods: ["get","head"],
    url: '/analisis',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
analisis.url = (options?: RouteQueryOptions) => {
    return analisis.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
analisis.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: analisis.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
analisis.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: analisis.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
const analisisForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: analisis.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
analisisForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: analisis.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\AnalisisController::analisis
* @see app/Http/Controllers/AnalisisController.php:10
* @route '/analisis'
*/
analisisForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: analisis.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

analisis.form = analisisForm
