<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


function getModelFromString($string){
    $retval = "";

    // Nếu truyền tên model trực tiếp vào sẽ không nhận, đo đó cần lấy tên model từ url
    if($string == ""){
        $string = substr($_SERVER['REDIRECT_URL'], 5);
    }

    $retval = "App\\Models\\" . dashesToCamelCase($string);

    return $retval;
}

function dashesToCamelCase($string, $capitalizeFirstCharacter = true)
{
    $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }
    return $str;
}

class ApiService extends Controller
{
    public function index($model = "", Request $request){
        $retval = [
            'status' => 'fail',
            'message' => '',
            'data' => [],
        ];
        try {
            $eloquent = getModelFromString($model);
            // Kiểm tra xem có tồn tại model này không
            if(!class_exists($eloquent)){
                $retval = [
                    'status' => 'fail',
                    'message' => 'Model not found',
                    'data' => [],
                ];
            } else {
                $query = $eloquent;
                $query = $eloquent::where('id', '>', 0);

                $specialParams = [
                    'page_size',
                    'api_token',
                    'page',
                    'with',
                    'order_by',
                    'group_by',
                    'select'
                ];

                $this->buildQueryByOperator($query, $request, $specialParams);
                $this->buildQueryByRelationshop($query, $request);
                $this->buildQueryByOrderBy($query, $request);
                $this->buildQueryByGroupBy($query, $request);
                $this->buildQueryBySelect($query, $request);
                // Kiểm tra quan hệ

                // Kiểm tra điều kiện phân trang
                if(!$request->has('page_size')){
                    $retval['data'] = $query->paginate(40);
                } else if ($request->input('page_size') > 0){
                    $retval['data'] = $query->paginate($request->input('page_size'));
                } else {
                    $retval['data'] = [
                        'total' => $query->count(),
                        'data' => $query->get()
                    ];
                }

                $retval['status'] = 'success';
            }
        } catch (\Exception $e) {
            $retval = [
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return \Response::json($retval);

    }

    public function store($model, Request $request){
        $retval = [
            'status' => 'fail',
            'message' => '',
            'data' => [],
        ];
        try {
            $eloquent = getModelFromString($model);
            // Kiểm tra xem có tồn tại model này không
            if(!class_exists($eloquent)){
                $retval = [
                    'status' => 'fail',
                    'message' => 'Model not found',
                    'data' => [],
                ];
            } else {
                $modelObject = new $eloquent;
                $modelArray = [];
                $specialParams = [
                    'page_size',
                    'api_token',
                    'page',
                    'with',
                    'order_by',
                    'group_by',
                    'select'
                ];
                foreach ($request->all() as $key => $value) {
                    if(in_array($key, $specialParams)){
                        // Do nothing
                    } else {
                        $modelArray[$key] = $value;
                    }
                }
                // $modelObject->create($modelArray);
                $retval['data'] = $modelObject->create($modelArray);
                $retval['status'] = 'success';
            }
        } catch (Exception $e) {
            $retval = [
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return \Response::json($retval);
    }

    public function update($model, $id, Request $request){
        // print_r($request->all()); die;
        $retval = [
            'status' => 'fail',
            'message' => '',
            'data' => [],
        ];
        try {
            $eloquent = getModelFromString($model);
            // Kiểm tra xem có tồn tại model này không
            if(!class_exists($eloquent)){
                $retval = [
                    'status' => 'fail',
                    'message' => 'Model not found',
                    'data' => [],
                ];
            } else {
                $modelObject = $eloquent::findOrFail($id);
                $modelArray = [];
                $specialParams = [
                    'page_size',
                    'api_token',
                    'page',
                    'with',
                    'order_by',
                    'group_by',
                    'select'
                ];
                foreach ($request->all() as $key => $value) {
                    if(in_array($key, $specialParams)){
                        // Do nothing
                    } else {
                        $modelArray[$key] = $value;
                    }
                }
                // print_r($modelArray); die;
                $modelObject->update($modelArray);
                $retval['data'] = $modelObject;
                $retval['status'] = 'success';
            }
        } catch (\Exception $e) {
            $retval = [
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => [],
            ];
            return \Response::json($retval, 500);
        }

        return \Response::json($retval);
    }

    public function delete($model, $id){
        // print_r($request->all()); die;
        $retval = [
            'status' => 'fail',
            'message' => '',
            'data' => [],
        ];
        try {
            $eloquent = getModelFromString($model);
            // Kiểm tra xem có tồn tại model này không
            if(!class_exists($eloquent)){
                $retval = [
                    'status' => 'fail',
                    'message' => 'Model not found',
                    'data' => [],
                ];
            } else {
                $modelObject = $eloquent::findOrFail($id);
                $retval['data'] = $modelObject->delete();
                $retval['status'] = 'success';
            }
        } catch (\Exception $e) {
            $retval = [
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return \Response::json($retval);
    }

    public function attach($model1, $id1, $model2, $id2, Request $request){
        // print_r($request->all()); die;
        $retval = [
            'status' => 'fail',
            'message' => '',
            'data' => [],
        ];
        try {
            $eloquent1 = getModelFromString($model1);
            $eloquent2 = getModelFromString($model2);
            // Kiểm tra xem có tồn tại model này không
            if(!class_exists($eloquent1) && !class_exists($eloquent2)){
                $retval = [
                    'status' => 'fail',
                    'message' => 'Model not found',
                    'data' => [],
                ];
            } else {
                $modelObject1 = $eloquent1::findOrFail($id1);
                $modelObject2 = $eloquent2::findOrFail($id2);
                $relationshipString = str_plural($model2);
                try {
                    if(!$request->has('type') || $request->input('type') == 'attach'){
                        $modelObject1->$relationshipString()->attach($id2);
                    } else {
                        $modelObject1->$relationshipString()->detach($id2);
                    }
                    $retval = [
                        'status' => 'success',
                        'message' => 'Attach / detach successfully',
                        'data' => $eloquent1::with($relationshipString)->findOrFail($id1),
                    ];
                } catch (\Exception $e) {
                    $retval = [
                        'status' => 'fail',
                        'message' => $e->getMessage(),
                        'data' => $eloquent1::with($relationshipString)->findOrFail($id1),
                    ];
                }

            }
        } catch (\Exception $e) {
            $retval = [
                'status' => 'fail',
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return \Response::json($retval);
    }

    private function buildQueryByOperator($query, Request $request, $specialParams){
        global $key, $value, $param;
        // Tách điều kiện where
        foreach ($request->all() as $key => $value) {
            if(in_array($key, $specialParams)){

            } else {
                // print_r($key);
                // print_r($value);
                // die;
                if (strpos($key, '^') > -1) {
                    $param  = explode('^', $key);
                    $query->whereHas($param[0], function($q)
                    {
                        global $param, $value;
                        $q->where($param[0].'.'.$param[1], '=', $value);

                    });
                } else if(strpos($key, '<>') > -1){
                    // Xử lý điều kiện <>
                    $param  = explode('<>', $key);
                    $query->where($param[0], '<>', $param[1]);
                } else if(strpos($key, '<') > -1 && $value){
                    // Xử lý điều kiện <=
                    $param = explode('<', $key);
                    $query->where($param[0], '<=', $value);
                } else if(strpos($key, '>') > -1 && $value){
                    // Xử lý điều kiện >=
                    $param = explode('>', $key);
                    $query->where($param[0], '>=', $value);
                } else if(strpos($key, '>') > -1){
                    // Xử lý điều kiện >
                    $param = explode('>', $key);
                    $query->where($param[0], '>', $param[1]);
                } else if(strpos($key, '<') > -1){
                    // Xử lý điều kiện <
                    $param = explode('<', $key);
                    $query->where($param[0], '<', $param[1]);
                } else if(strpos($key, '~') > -1){
                    // Xử lý điều kiện ~ like
                    $param = explode('~', $key);
                    $query->where($param[0], 'like', '%' . $param[1] . '%');
                } else {
                    // Xử lý điều kiện bằng
                    if(is_array($value)){
                        $query->whereIn($key, $value);
                    } else {
                        $query->where($key, '=', $value);
                    }
                }
            }
        }
    }

    private function buildQueryByRelationshop($query, Request $request){
        if($request->has('with')){
            if(!is_array($request->input('with'))){
                $relation = $request->input('with');
                $query->with($relation);
            } else {
                foreach ($request->input('with') as $relation) {
                    $query->with($relation);
                }
            }
        }
    }

    private function buildQueryByOrderBy($query, Request $request){
        if($request->has('order_by')){
            if(!is_array($request->input('order_by'))){
                $orderByField = $request->input('order_by');
                if($orderByField[0] == '-'){
                    $orderByField = substr($orderByField, 1);
                    $query->orderBy($orderByField, 'desc');
                } else {
                    $query->orderBy($orderByField, 'asc');
                }
            } else {
                foreach ($request->input('order_by') as $orderByField) {
                    if($orderByField[0] == '-'){
                        $orderByField = substr($orderByField, 1);
                        $query->orderBy($orderByField, 'desc');
                    } else {
                        $query->orderBy($orderByField, 'asc');
                    }
                }
            }
        }
    }

    private function buildQueryByGroupBy($query, Request $request){
        if($request->has('group_by')){
            if(!is_array($request->input('group_by'))){
                $query->groupBy($request->input('group_by'));
            } else {
                foreach ($request->input('group_by') as $groupByField) {
                    $query->groupBy($groupByField);
                }
            }
        }
    }

    private function buildQueryBySelect($query, Request $request){
        if($request->has('select')){
            if(!is_array($request->input('select'))){
                $query->select($request->input('select'));
            } else {
                foreach ($request->input('select') as $selectField) {
                    $query->addSelect($selectField);
                }
            }
        }
    }

}
