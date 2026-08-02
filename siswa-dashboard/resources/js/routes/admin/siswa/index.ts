import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/admin/siswa',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::index
* @see app/Http/Controllers/Admin/StudentController.php:13
* @route '/admin/siswa'
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
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/admin/siswa/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
*/
createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::create
* @see app/Http/Controllers/Admin/StudentController.php:21
* @route '/admin/siswa/create'
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
* @see \App\Http\Controllers\Admin\StudentController::store
* @see app/Http/Controllers/Admin/StudentController.php:28
* @route '/admin/siswa'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/siswa',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::store
* @see app/Http/Controllers/Admin/StudentController.php:28
* @route '/admin/siswa'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::store
* @see app/Http/Controllers/Admin/StudentController.php:28
* @route '/admin/siswa'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::store
* @see app/Http/Controllers/Admin/StudentController.php:28
* @route '/admin/siswa'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::store
* @see app/Http/Controllers/Admin/StudentController.php:28
* @route '/admin/siswa'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
export const show = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/admin/siswa/{siswa}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
show.url = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { siswa: args }
    }

    if (Array.isArray(args)) {
        args = {
            siswa: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        siswa: args.siswa,
    }

    return show.definition.url
            .replace('{siswa}', parsedArgs.siswa.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
show.get = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
show.head = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
const showForm = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
showForm.get = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::show
* @see app/Http/Controllers/Admin/StudentController.php:0
* @route '/admin/siswa/{siswa}'
*/
showForm.head = (args: { siswa: string | number } | [siswa: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
export const edit = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/admin/siswa/{siswa}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
edit.url = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { siswa: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { siswa: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            siswa: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        siswa: typeof args.siswa === 'object'
        ? args.siswa.id
        : args.siswa,
    }

    return edit.definition.url
            .replace('{siswa}', parsedArgs.siswa.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
edit.get = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
edit.head = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
const editForm = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
editForm.get = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::edit
* @see app/Http/Controllers/Admin/StudentController.php:57
* @route '/admin/siswa/{siswa}/edit'
*/
editForm.head = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
export const update = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/admin/siswa/{siswa}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
update.url = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { siswa: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { siswa: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            siswa: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        siswa: typeof args.siswa === 'object'
        ? args.siswa.id
        : args.siswa,
    }

    return update.definition.url
            .replace('{siswa}', parsedArgs.siswa.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
update.put = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
update.patch = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
const updateForm = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
updateForm.put = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::update
* @see app/Http/Controllers/Admin/StudentController.php:64
* @route '/admin/siswa/{siswa}'
*/
updateForm.patch = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
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
* @see \App\Http\Controllers\Admin\StudentController::destroy
* @see app/Http/Controllers/Admin/StudentController.php:108
* @route '/admin/siswa/{siswa}'
*/
export const destroy = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/admin/siswa/{siswa}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\Admin\StudentController::destroy
* @see app/Http/Controllers/Admin/StudentController.php:108
* @route '/admin/siswa/{siswa}'
*/
destroy.url = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { siswa: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { siswa: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            siswa: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        siswa: typeof args.siswa === 'object'
        ? args.siswa.id
        : args.siswa,
    }

    return destroy.definition.url
            .replace('{siswa}', parsedArgs.siswa.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\StudentController::destroy
* @see app/Http/Controllers/Admin/StudentController.php:108
* @route '/admin/siswa/{siswa}'
*/
destroy.delete = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::destroy
* @see app/Http/Controllers/Admin/StudentController.php:108
* @route '/admin/siswa/{siswa}'
*/
const destroyForm = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\StudentController::destroy
* @see app/Http/Controllers/Admin/StudentController.php:108
* @route '/admin/siswa/{siswa}'
*/
destroyForm.delete = (args: { siswa: number | { id: number } } | [siswa: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

destroy.form = destroyForm

const siswa = {
    index: Object.assign(index, index),
    create: Object.assign(create, create),
    store: Object.assign(store, store),
    show: Object.assign(show, show),
    edit: Object.assign(edit, edit),
    update: Object.assign(update, update),
    destroy: Object.assign(destroy, destroy),
}

export default siswa