<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Precio\BulkDestroyPrecio;
use App\Http\Requests\Admin\Precio\DestroyPrecio;
use App\Http\Requests\Admin\Precio\IndexPrecio;
use App\Http\Requests\Admin\Precio\StorePrecio;
use App\Http\Requests\Admin\Precio\UpdatePrecio;
use App\Models\Precio;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PreciosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPrecio $request
     * @return array|Factory|View
     */
    public function index(IndexPrecio $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Precio::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'precio'],

            // set columns to searchIn
            ['id', 'nombre']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.precio.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.precio.create');

        return view('admin.precio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePrecio $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePrecio $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Precio
        $precio = Precio::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/precios'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/precios');
    }

    /**
     * Display the specified resource.
     *
     * @param Precio $precio
     * @throws AuthorizationException
     * @return void
     */
    public function show(Precio $precio)
    {
        $this->authorize('admin.precio.show', $precio);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Precio $precio
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Precio $precio)
    {
        $this->authorize('admin.precio.edit', $precio);


        return view('admin.precio.edit', [
            'precio' => $precio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePrecio $request
     * @param Precio $precio
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePrecio $request, Precio $precio)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Precio
        $precio->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/precios'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/precios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPrecio $request
     * @param Precio $precio
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPrecio $request, Precio $precio)
    {
        $precio->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPrecio $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPrecio $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Precio::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
