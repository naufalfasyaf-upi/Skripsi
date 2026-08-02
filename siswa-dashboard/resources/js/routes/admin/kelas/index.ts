import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/admin/kelas',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::index
* @see app/Http/Controllers/Admin/KelasController.php:11
* @route '/admin/kelas'
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
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/admin/kelas/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::create
* @see app/Http/Controllers/Admin/KelasController.php:19
* @route '/admin/kelas/create'
*/
createForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

create.form = createForm

/**
* @see \App\Http\Controllers\Admin\KelasController::store
* @see app/Http/Controllers/Admin/KelasController.php:25
* @route '/admin/kelas'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/kelas',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::store
* @see app/Http/Controllers/Admin/KelasController.php:25
* @route '/admin/kelas'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::store
* @see app/Http/Controllers/Admin/KelasController.php:25
* @route '/admin/kelas'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::store
* @see app/Http/Controllers/Admin/KelasController.php:25
* @route '/admin/kelas'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::store
* @see app/Http/Controllers/Admin/KelasController.php:25
* @route '/admin/kelas'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
export const show = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/admin/kelas/{kela}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
show.url = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { kela: args }
    }

    if (Array.isArray(args)) {
        args = {
            kela: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        kela: args.kela,
    }

    return show.definition.url
            .replace('{kela}', parsedArgs.kela.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
show.get = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
show.head = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
const showForm = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
showForm.get = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::show
* @see app/Http/Controllers/Admin/KelasController.php:0
* @route '/admin/kelas/{kela}'
*/
showForm.head = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

show.form = showForm

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
export const edit = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/admin/kelas/{kela}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
edit.url = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { kela: args }
    }

    if (Array.isArray(args)) {
        args = {
            kela: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        kela: args.kela,
    }

    return edit.definition.url
            .replace('{kela}', parsedArgs.kela.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
edit.get = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
edit.head = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
const editForm = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
editForm.get = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::edit
* @see app/Http/Controllers/Admin/KelasController.php:41
* @route '/admin/kelas/{kela}/edit'
*/
editForm.head = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

edit.form = editForm

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
export const update = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/admin/kelas/{kela}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
update.url = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { kela: args }
    }

    if (Array.isArray(args)) {
        args = {
            kela: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        kela: args.kela,
    }

    return update.definition.url
            .replace('{kela}', parsedArgs.kela.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
update.put = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
update.patch = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
const updateForm = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
updateForm.put = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::update
* @see app/Http/Controllers/Admin/KelasController.php:48
* @route '/admin/kelas/{kela}'
*/
updateForm.patch = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PATCH',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

update.form = updateForm

/**
* @see \App\Http\Controllers\Admin\KelasController::destroy
* @see app/Http/Controllers/Admin/KelasController.php:64
* @route '/admin/kelas/{kela}'
*/
export const destroy = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/admin/kelas/{kela}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\Admin\KelasController::destroy
* @see app/Http/Controllers/Admin/KelasController.php:64
* @route '/admin/kelas/{kela}'
*/
destroy.url = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { kela: args }
    }

    if (Array.isArray(args)) {
        args = {
            kela: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        kela: args.kela,
    }

    return destroy.definition.url
            .replace('{kela}', parsedArgs.kela.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\KelasController::destroy
* @see app/Http/Controllers/Admin/KelasController.php:64
* @route '/admin/kelas/{kela}'
*/
destroy.delete = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::destroy
* @see app/Http/Controllers/Admin/KelasController.php:64
* @route '/admin/kelas/{kela}'
*/
const destroyForm = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\KelasController::destroy
* @see app/Http/Controllers/Admin/KelasController.php:64
* @route '/admin/kelas/{kela}'
*/
destroyForm.delete = (args: { kela: string | number } | [kela: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

destroy.form = destroyForm

const kelas = {
    index: Object.assign(index, index),
    create: Object.assign(create, create),
    store: Object.assign(store, store),
    show: Object.assign(show, show),
    edit: Object.assign(edit, edit),
    update: Object.assign(update, update),
    destroy: Object.assign(destroy, destroy),
}

export default kelas