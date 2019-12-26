<?php
$leptop_sort_params = [
        //<!-- Производитель -->
        0 => ["Производитель", "SELECT brand_mat.name,brand_mat.id_brand_mat as id
        FROM brand_mat INNER JOIN mat ON brand_mat.id_brand_mat = mat.id_brand
        GROUP BY brand_mat.name,brand_mat.id_brand_mat
        ORDER BY brand_mat.name","name","mat.id_brand"],

        //<!-- Цена -->
        1 => ["Цена","0","cost","SELECT 
        MAX(mat.cost) AS max,
        MIN(mat.cost) AS min
        FROM mat"],
        
        //<!-- Дата выхода -->
        2 => ["Дата выхода","SELECT date_out.name, date_out.id_date as id
        FROM date_out
        INNER JOIN mat ON date_out.id_date = mat.id_date
        GROUP BY  date_out.name, date_out.id_date
        ORDER BY date_out.name","name","mat.id_date"],

        //<!-- Совместимость -->

        3 => ["Совместимость","SELECT compatibility_mat.name, compatibility_mat.id_compatibility_mat as id
        FROM compatibility_mat
        INNER JOIN mat
        ON compatibility_mat.id_compatibility_mat = mat.id_compatibility
        GROUP BY  compatibility_mat.name, compatibility_mat.id_compatibility_mat
        ORDER BY compatibility_mat.name","name","mat.id_compatibility"],

        //<!-- Материал поверхности -->

          4 => ["Материал поверхности"," SELECT material_surface.name, material_surface.id_material_surface as id
          FROM material_surface
          INNER JOIN mat
          ON material_surface.id_material_surface = mat.id_material
          GROUP BY material_surface.name, material_surface.id_material_surface 
          ORDER BY material_surface.name","name","mat.id_material"],

        //<!-- Цвет -->
    
          5 => ["Цвет"," SELECT color.name, color.id_color as id
          FROM color
          INNER JOIN mat
          ON color.id_color = mat.id_color
          GROUP BY color.name, color.id_color 
          ORDER BY color.name","name","mat.id_color"],

        //<!-- Глубина -->
        6 => ["Глубина, мм","0","deep","SELECT 
        MAX(mat.deep) AS max,
        MIN(mat.deep) AS min
        FROM mat"],

        //<!-- Ширина -->
        7 => ["Ширина, мм","0","weight","SELECT 
        MAX(mat.weight) AS max,
        MIN(mat.weight) AS min
        FROM mat"],

        //<!-- Толщина -->
        8 => ["Толщина, мм","0","height","SELECT 
        MAX(mat.height) AS max,
        MIN(mat.height) AS min
        FROM mat"],
        
        //<!-- Вес -->
        9 => ["Вес, кг","0","massa","SELECT 
        MAX(mat.massa) AS max,
        MIN(mat.massa) AS min
        FROM mat"],

        //<!-- Игровой -->
         10 => ["Игровой","1"," ","mat.gaming_C"],

        //<!-- Подушечка под запястие -->
        11 => ["Подушечка под запястие","1"," ","mat.pillow_C"],
       
        //<!-- Бортик -->
        12 => ["Бортик","1"," ","mat.skirting_C"],

        //<!-- Крепление для кабеля -->
        13 => ["Крепление для кабеля","1"," ","mat.binding_C"],

        //<!-- Подсветка -->
        14 => ["Подсветка","1"," ","mat.illumination_C"],

        //<!-- USB-порт -->
        15 => ["USB-порт","1"," ","mat.usb_C"],

        //<!-- Беспроводная зарядка -->
        16 => ["Беспроводная зарядка","1"," ","mat.exercise_C"],
    ];
?>