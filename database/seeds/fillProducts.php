<?php

use Illuminate\Database\Seeder;

class fillProducts extends Seeder
{                
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('products')->insert([ 'category_id' => '1111',
                                                'article'     => 'ADIDAS Originals Sobakov Boost (BD7674)',
                                                'brand'       => 'ADIDAS',
                                                'series'      => 'Originals',
                                                'model'       => 'Sobakov Boost',
                                                'partnumber'  => 'BD7674',
                                                'image'       => 'adidas1.jpg',
                                                'gender'      => 'male',
                                                'description' => 'Кроссовки Sobakov Boost в белом цвете от adidas. Модель Sobakov была приурочена к прошедшему в прошлом году Чемпионату Мира по футболу в России. Дизайнеры adidas дополнили модель амортизацией Boost, расширили язычок и разъединили фирменные три полоски. Тотальную мягкость обеспечивают Sobakov Boost за счёт текстильного верха и амортизирующей подошвы.
                                                                   — вязаный текстиль и натуральная кожа для верха кроссовок
                                                                   — вставка Boost для амортизации
                                                                   — каучуковая подмётка
                                                                   — укреплённая пятка с элементом для удобства надевания
                                                                   — широкий язычок',
                                                'style'        => 'Sport',
                                                'season'       => 'Spring/Summer',
                                                'price'        => '2599.00',
                                                'quantity'     => '10'  ]);
                DB::table('products')->insert([ 'category_id'  => '1111',
                                                'article'      => 'NIKE Air Max Plus PRM SE (????__????)',
                                                'brand'        => 'NIKE',
                                                'series'       => 'Air Max',
                                                'model'        => 'Plus PRM SE',
                                                'partnumber'   => '????__????',
                                                'image'        => 'nike1.jpg',
                                                'gender'       => 'male',
                                                'description'  => 'Мужские кроссовки Air Max Plus PRM. Для лучшей амортизации вставки Air Max в носочной и пяточной части кроссовка. ТN (Tuned Air) в пятке подошвы – жесткие, но лёгкие вставки из полимерного материала, которые дополнительно амортизируют и позволяют не заваливаться ступне внутрь при ходьбе и беге. Верх выполнен из ткани с добавлением волокон TPU. Термопластичный ПолиУретан - износостойкий, гибкий полимерный материал. Модель из пака "Throwback Future" с переливающимися элементами фиолетово-бирюзового цвета.
                                                                   — литой синтетический материал для верха кроссовок
                                                                   — Air Max для амортизации
                                                                   — укрепляющая вставка в средней части подошвы
                                                                   — рефлективные полоски на шнурках и вдоль них
                                                                   — протекторная подошва',
                                                'style'        => 'Sport',
                                                'season'       => 'Spring/Summer',
                                                'price'        => '2999.00',
                                                'quantity'     => '10'  ]);
                DB::table('products')->insert([ 'category_id'  => '1122',
                                                'article'      => 'NIKE Air Jordan 4 RETRO (308497-060)',
                                                'brand'        => 'NIKE',
                                                'series'       => 'Air Jordan',
                                                'model'        => '4 RETRO',
                                                'partnumber'   => '308497-060',
                                                'image'        => 'jordan1.jpg',
                                                'gender'       => 'male',
                                                'description'  => 'Черные кожаные кроссовки Air Jordan 4 Retro от jordan. Миндалевидный носок, шнуровка спереди, заплатка с логотипом на язычке, фирменная стелька, уплотненная щиколотка, панели в сетку, фирменный дизайн каблука, фирменная стелька Nike Air.
                                                                   Подошва: резина 100%
                                                                   Наружный Материал: нубук 100%
                                                                   Подкладка: нубук 100%',
                                                'style'        => 'Old School',
                                                'season'       => 'Authumn/Winter',
                                                'price'        => '2739.00',
                                                'quantity'     => '10'  ]);
                DB::table('products')->insert([ 'category_id'  => '2222',
                                                'article'      => 'PUMA Thunder TZ WN\'S (36921301)',
                                                'brand'        => 'PUMA',
                                                'series'       => 'Thunder',
                                                'model'        => 'TZ WN\'S',
                                                'partnumber'   => '36921301',
                                                'image'        => 'puma1.jpg',
                                                'gender'       => 'female',
                                                'description'  => 'Создавайте модный образ с помощью этих ретро-кроссовок. Благодаря свежим контрастным оттенкам, многослойной подошве и увеличенным рельефным деталям, вы привлечете внимание окружающих.

                                                                   Характеристики
                                                                   Коллекция: Весна-лето 2019
                                                                   Материал верха: Неопрен
                                                                   Материал подошвы: Резина. Легкая и удобная промежуточная подошва IMEVA
                                                                   Стиль: Стрит-стайл
                                                                   Надеваемая конструкция
                                                                   Застежка-молния на внутренней стороне
                                                                   Петля на заднике для удобства надевания и снятия
                                                                   Логотип PUMA Wordmark в передней части
                                                                   Страна-производитель: Вьетнам',
                                                'style'        => 'Sport',
                                                'season'       => 'Spring/Summer',
                                                'price'        => '1875.00',
                                                'quantity'     => '10'  ]);
                DB::table('products')->insert([ 'category_id'  => '1122',
                                                'article'      => 'NIKE Air Jordan Zoom Zero Gravity (0000___0000)',
                                                'brand'        => 'NIKE',
                                                'series'       => 'Air Jordan',
                                                'model'        => 'Zoom Zero Gravity',
                                                'partnumber'   => '0000___0000',
                                                'image'        => 'jordan2.jpg',
                                                'gender'       => 'male',
                                                'description'  => 'Баскетбольные кроссовки Jordan 0 Gravity со вставкой Zoom Air в передней части стопы созданы для маневренности на высокой скорости. Легкий верх обеспечивает поддержку благодаря особой вставке в средней части стопы, интегрированной в шнуровку для надежной посадки.',
                                                'style'        => 'Old School',
                                                'season'       => 'Authumn/Winter',
                                                'price'        => '3449.00',
                                                'quantity'     => '10'  ]);
        }
    }