import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/admin/mapel',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::index
* @see app/Http/Controllers/Admin/MapelController.php:11
* @route '/admin/mapel'
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
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/admin/mapel/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
*/
createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::create
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/create'
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
* @see \App\Http\Controllers\Admin\MapelController::store
* @see app/Http/Controllers/Admin/MapelController.php:18
* @route '/admin/mapel'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/mapel',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::store
* @see app/Http/Controllers/Admin/MapelController.php:18
* @route '/admin/mapel'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::store
* @see app/Http/Controllers/Admin/MapelController.php:18
* @route '/admin/mapel'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::store
* @see app/Http/Controllers/Admin/MapelController.php:18
* @route '/admin/mapel'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::store
* @see app/Http/Controllers/Admin/MapelController.php:18
* @route '/admin/mapel'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
export const show = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/admin/mapel/{mapel}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
show.url = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { mapel: args }
    }

    if (Array.isArray(args)) {
        args = {
            mapel: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        mapel: args.mapel,
    }

    return show.definition.url
            .replace('{mapel}', parsedArgs.mapel.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
show.get = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
show.head = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
const showForm = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
showForm.get = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::show
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
showForm.head = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
export const edit = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/admin/mapel/{mapel}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
edit.url = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { mapel: args }
    }

    if (Array.isArray(args)) {
        args = {
            mapel: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        mapel: args.mapel,
    }

    return edit.definition.url
            .replace('{mapel}', parsedArgs.mapel.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
edit.get = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
edit.head = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
const editForm = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
editForm.get = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::edit
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}/edit'
*/
editForm.head = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
export const update = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/admin/mapel/{mapel}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
update.url = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { mapel: args }
    }

    if (Array.isArray(args)) {
        args = {
            mapel: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        mapel: args.mapel,
    }

    return update.definition.url
            .replace('{mapel}', parsedArgs.mapel.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
update.put = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
update.patch = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
const updateForm = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
updateForm.put = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::update
* @see app/Http/Controllers/Admin/MapelController.php:0
* @route '/admin/mapel/{mapel}'
*/
updateForm.patch = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
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
* @see \App\Http\Controllers\Admin\MapelController::destroy
* @see app/Http/Controllers/Admin/MapelController.php:31
* @route '/admin/mapel/{mapel}'
*/
export const destroy = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/admin/mapel/{mapel}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\Admin\MapelController::destroy
* @see app/Http/Controllers/Admin/MapelController.php:31
* @route '/admin/mapel/{mapel}'
*/
destroy.url = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { mapel: args }
    }

    if (Array.isArray(args)) {
        args = {
            mapel: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        mapel: args.mapel,
    }

    return destroy.definition.url
            .replace('{mapel}', parsedArgs.mapel.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\MapelController::destroy
* @see app/Http/Controllers/Admin/MapelController.php:31
* @route '/admin/mapel/{mapel}'
*/
destroy.delete = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::destroy
* @see app/Http/Controllers/Admin/MapelController.php:31
* @route '/admin/mapel/{mapel}'
*/
const destroyForm = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\MapelController::destroy
* @see app/Http/Controllers/Admin/MapelController.php:31
* @route '/admin/mapel/{mapel}'
*/
destroyForm.delete = (args: { mapel: string | number } | [mapel: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

destroy.form = destroyForm

const mapel = {
    index: Object.assign(index, index),
    create: Object.assign(create, create),
    store: Object.assign(store, store),
    show: Object.assign(show, show),
    edit: Object.assign(edit, edit),
    update: Object.assign(update, update),
    destroy: Object.assign(destroy, destroy),
}

export default mapel