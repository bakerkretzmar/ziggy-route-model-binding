<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class GenerateRoutes extends Command
{
    protected $signature = 'generate-routes';

    public function handle()
    {
        $faker = Factory::create();

        $routes = Collection::times(1000)->map(function () use ($faker) {
            $name = Str::title($faker->unique()->firstName);

            $controller = <<<PHP
<?php

namespace App\Http\Controllers;

use App\\{$name}Model;

class {$name}Controller
{
    public function __invoke({$name}Model \${$name})
    {
        return;
    }
}
PHP;

            file_put_contents(base_path("app/Http/Controllers/{$name}Controller.php"), $controller);

            $model = <<<PHP
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class {$name}Model extends Model
{
    //
}
PHP;

            file_put_contents(base_path("app/{$name}Model.php"), $model);

            return "Route::get('/{$name}', {$name}Controller::class)->name('{$name}');";
        });

        file_put_contents(
            base_path('routes/web.php'),
            Str::before(file_get_contents(base_path('routes/web.php')), '// ---') . "\n// ---\n\n" . $routes->join("\n") . "\n",
        );

        return 0;
    }
}
