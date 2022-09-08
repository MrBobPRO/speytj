<?php

namespace Database\Seeders;

use App\Models\Atx;
use App\Support\Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $title = ['Аминокислоты', 'Антианемические препараты', 'Антигистаминные препараты', 'Антипсихотические препараты', 'Венотозирующие препараты', 'Витамины и минералы', 'Гинекологические препараты', 'Гормональные препараты', 'Дерматологические препараты', 'Костно-суставные препараты', 'Кровоостанавливающие средства', 'Назальные препараты', 'Нейротропные препараты', 'НПВС', 'Пищеварительный тракт и обмен веществ', 'Препараты для лечения простуды и кашля', 'Пробиотики', 'Противовоспалительные рассасывающие средства', 'Противогельминтные препараты', 'Противогрибковые средства', 'Противомикробные препараты', 'Противоревматические препараты', 'Противосудорожные препараты', 'Седативные препараты', 'Сердечно - сосудистые препараты', 'Спазмолитики', 'Урологические препараты'];

      for($i = 0; $i < count($title); $i++) {
        $atx = new Atx();
        $atx->title = $title[$i];
        $atx->slug = Helper::generateUniqueSlug($atx->title, Atx::class);
        $atx->save();
      }
    }
}
