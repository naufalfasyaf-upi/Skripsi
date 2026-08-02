import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/admin/guru',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
*/
indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: index.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::index
* @see app/Http/Controllers/Admin/TeacherController.php:14
* @route '/admin/guru'
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
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/admin/guru/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
*/
createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: create.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::create
* @see app/Http/Controllers/Admin/TeacherController.php:22
* @route '/admin/guru/create'
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
* @see \App\Http\Controllers\Admin\TeacherController::store
* @see app/Http/Controllers/Admin/TeacherController.php:65
* @route '/admin/guru'
*/
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/guru',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::store
* @see app/Http/Controllers/Admin/TeacherController.php:65
* @route '/admin/guru'
*/
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::store
* @see app/Http/Controllers/Admin/TeacherController.php:65
* @route '/admin/guru'
*/
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::store
* @see app/Http/Controllers/Admin/TeacherController.php:65
* @route '/admin/guru'
*/
const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::store
* @see app/Http/Controllers/Admin/TeacherController.php:65
* @route '/admin/guru'
*/
storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: store.url(options),
    method: 'post',
})

store.form = storeForm

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
export const show = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/admin/guru/{guru}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
show.url = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { guru: args }
    }

    if (Array.isArray(args)) {
        args = {
            guru: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        guru: args.guru,
    }

    return show.definition.url
            .replace('{guru}', parsedArgs.guru.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
show.get = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
show.head = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
const showForm = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
showForm.get = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: show.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::show
* @see app/Http/Controllers/Admin/TeacherController.php:0
* @route '/admin/guru/{guru}'
*/
showForm.head = (args: { guru: string | number } | [guru: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
export const edit = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/admin/guru/{guru}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
edit.url = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { guru: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { guru: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            guru: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        guru: typeof args.guru === 'object'
        ? args.guru.id
        : args.guru,
    }

    return edit.definition.url
            .replace('{guru}', parsedArgs.guru.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
edit.get = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
edit.head = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
const editForm = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
editForm.get = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: edit.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::edit
* @see app/Http/Controllers/Admin/TeacherController.php:29
* @route '/admin/guru/{guru}/edit'
*/
editForm.head = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
export const update = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/admin/guru/{guru}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
update.url = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { guru: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { guru: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            guru: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        guru: typeof args.guru === 'object'
        ? args.guru.id
        : args.guru,
    }

    return update.definition.url
            .replace('{guru}', parsedArgs.guru.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
update.put = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
update.patch = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
const updateForm = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
updateForm.put = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: update.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'PUT',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::update
* @see app/Http/Controllers/Admin/TeacherController.php:36
* @route '/admin/guru/{guru}'
*/
updateForm.patch = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
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
* @see \App\Http\Controllers\Admin\TeacherController::destroy
* @see app/Http/Controllers/Admin/TeacherController.php:58
* @route '/admin/guru/{guru}'
*/
export const destroy = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/admin/guru/{guru}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\Admin\TeacherController::destroy
* @see app/Http/Controllers/Admin/TeacherController.php:58
* @route '/admin/guru/{guru}'
*/
destroy.url = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { guru: args }
    }

    if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
        args = { guru: args.id }
    }

    if (Array.isArray(args)) {
        args = {
            guru: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        guru: typeof args.guru === 'object'
        ? args.guru.id
        : args.guru,
    }

    return destroy.definition.url
            .replace('{guru}', parsedArgs.guru.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\TeacherController::destroy
* @see app/Http/Controllers/Admin/TeacherController.php:58
* @route '/admin/guru/{guru}'
*/
destroy.delete = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::destroy
* @see app/Http/Controllers/Admin/TeacherController.php:58
* @route '/admin/guru/{guru}'
*/
const destroyForm = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

/**
* @see \App\Http\Controllers\Admin\TeacherController::destroy
* @see app/Http/Controllers/Admin/TeacherController.php:58
* @route '/admin/guru/{guru}'
*/
destroyForm.delete = (args: { guru: number | { id: number } } | [guru: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: destroy.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'DELETE',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'post',
})

destroy.form = destroyForm

const TeacherController = { index, create, store, show, edit, update, destroy }

export default TeacherController