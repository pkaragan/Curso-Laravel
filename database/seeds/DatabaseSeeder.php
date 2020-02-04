<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTablas([
            'rol',
            'permiso',
            'usuario',
            'usuario_rol'
        ]);
        $this->call(tablaRolSeeder::class);
        $this->call(tablaPermisoSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class);
    }

    protected function TruncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');//Deshabilitar foreigns no recomendable cuando ya este la BD y el sistema en ejecucion
        foreach ($tablas as $tabla){
            DB::table($tabla) ->truncate(); //truncar toda la bd
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//Hablitar llaves foraneas
    }
}