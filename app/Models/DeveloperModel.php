<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DeveloperModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'developers';
    protected $fillable = ['nome', 'sexo', 'idade', 'hobby', 'datanascimento'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $dateFormat = 'd/m/Y';
    public $timestamps = false;

    public function searchByTerms(Request $request): Paginator
    {
        $query = DB::table($this->table);
        $columns = Schema::getColumnListing($this->table);

        $searchTerm = $request->input('searchTerm');

        if (!empty($searchTerm)) {
            $query->where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'ilike', '%' . $searchTerm . '%');
                }
            });
        }

        return $query->select('id', 'nome', 'sexo', 'idade', 'hobby', 'datanascimento')
            ->orderBy('nome')
            ->paginate($request->input('perPage', 50));
    }


    public function persistNewDeveloper(Request $request): void
    {
        $this->fill([
            'nome' => ucwords(strtolower($request->input('nome'))),
            'sexo' => strtoupper($request->input('sexo')),
            'idade' => $request->input('idade'),
            'hobby' => ucfirst(strtolower($request->input('hobby'))),
            'datanascimento' => $request->input('datanascimento')
        ]);
        $this->save();
    }

    public function updateDeveloper(Request $request, int $id): void
    {
        $this::all()->find($id)->update([
            'nome' => ucwords(strtolower($request->input('nome'))),
            'sexo' => strtoupper($request->input('sexo')),
            'idade' => $request->input('idade'),
            'hobby' => ucfirst(strtolower($request->input('hobby'))),
            'datanascimento' => $request->input('datanascimento')
        ]);
    }

    public function deleteDeveloperById(int $id): void
    {
        $this::all()->find($id)->delete();
    }

    public function getDeveloperById(int $id): Model|Collection|array|null
    {
        return $this::all()->find($id);
    }
}
