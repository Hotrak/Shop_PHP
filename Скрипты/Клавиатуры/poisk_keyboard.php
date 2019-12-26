1<?php
$leptop_sort_params = [
        //<!-- Производитель -->

        0 => ["Производитель", "SELECT brand_keyboard.name, brand_keyboard.id_brand_keyboard as id 
        FROM brand_keyboard
        INNER JOIN keyboard
          ON brand_keyboard.id_brand_keyboard = keyboard.id_brand
        GROUP BY brand_keyboard.name, brand_keyboard.id_brand_keyboard  
        ORDER BY brand_keyboard.name","name","keyboard.id_brand"],

        //<!-- Тип -->

        1 => ["Тип", "SELECT type_keyboard.name, type_keyboard.id_type_keyboard as id
        FROM type_keyboard
        INNER JOIN keyboard
          ON type_keyboard.id_type_keyboard = keyboard.id_type_keyboard
        GROUP BY type_keyboard.name, type_keyboard.id_type_keyboard  
        ORDER BY type_keyboard.name","name","keyboard.id_type_keyboard"],

        //<!-- Дата выхода -->
        
        2 => ["Дата выхода", "SELECT type_keyboard.name, type_keyboard.id_type_keyboard as id
        FROM type_keyboard
        INNER JOIN keyboard
          ON type_keyboard.id_type_keyboard = keyboard.id_type_keyboard
        GROUP BY type_keyboard.name, type_keyboard.id_type_keyboard  
        ORDER BY type_keyboard.name","name","keyboard.id_type_keyboard"],

        //<!-- Цена -->

        3 => ["Цена","0","cost","SELECT 
        MAX(keyboard.cost) AS max,
        MIN(keyboard.cost) AS min
        FROM keyboard"],

        //<!-- Назначение -->

        4 => ["Назначение", "SELECT appointment_keyboard.name, appointment_keyboard.id_appointment_keyboard as id
        FROM appointment_keyboard
        INNER JOIN keyboard
          ON appointment_keyboard.id_appointment_keyboard = keyboard.id_appointment
        GROUP BY appointment_keyboard.name, appointment_keyboard.id_appointment_keyboard  
        ORDER BY appointment_keyboard.name","name","keyboard.id_appointment"],

        //<!-- Подключение -->

        5 => ["Подключение", "SELECT connection_keyboard.name, connection_keyboard.id_connection_keyboard as id
        FROM connection_keyboard
        INNER JOIN keyboard
          ON connection_keyboard.id_connection_keyboard = keyboard.id_connection
        GROUP BY appointment_keyboard.name, appointment_keyboard.id_appointment_keyboard  
        ORDER BY appointment_keyboard.name","name","keyboard.id_connection"],

        //<!-- Форма клавиш -->

        6 => ["Форма клавиш", "SELECT shape_keys_keyboard.name, shape_keys_keyboard.id_shape_keys_keyboard as id
        FROM shape_keys_keyboard
        INNER JOIN keyboard
          ON shape_keys_keyboard.id_shape_keys_keyboard = keyboard.id_shape_keys
        GROUP BY shape_keys_keyboard.name, shape_keys_keyboard.id_shape_keys_keyboard 
        ORDER BY shape_keys_keyboard.name","name","keyboard.id_shape_keys"],

        //<!-- Подсветка -->

        7 => ["Подсветка","1"," ","keyboard.illumination_C"],

        //<!-- Влагозащита -->

        8 => ["Влагозащита","1"," ","keyboard.protection_C"],

        //<!-- USB-порт -->

        9 => ["USB-порт","1"," ","keyboard.usb_port_C"],

        //<!-- Цвет -->

        10 => ["Цвет", "SELECT SELECT color.name, color.id_color as id
        FROM color
        INNER JOIN keyboard
          ON color.id_color = keyboard.id_color
        GROUP BY color.name, color.id_color
        ORDER BY color.name","name","keyboard.id_color"],

        //<!-- Материал -->

        11 => ["Материал", "SELECT material_surface_keyboard.name, material_surface_keyboard.id_material_surface_keyboard as id
        FROM material_surface_keyboard
        INNER JOIN keyboard
          ON material_surface_keyboard.id_material_surface_keyboard = keyboard.id_material
        GROUP BY material_surface_keyboard.name, material_surface_keyboard.id_material_surface_keyboard
        ORDER BY material_surface_keyboard.name","name","keyboard.id_material"],

        //<!-- Тип переключателя -->

        12 => ["Тип переключателя", "SELECT type_switches_keyboard.name, type_switches_keyboard.id_type_switches_keyboard as id
        FROM type_switches_keyboard
        INNER JOIN keyboard
          ON type_switches_keyboard.id_type_switches_keyboard = keyboard.id_switches
        GROUP BY type_switches_keyboard.name, type_switches_keyboard.id_type_switches_keyboard
        ORDER BY type_switches_keyboard.name","name","keyboard.id_switches"],

        //<!-- Количество доп. кнопок -->

        13 => ["Количество доп. кнопок","0","additional_button","SELECT 
        MAX(keyboard.additional_button) AS max,
        MIN(keyboard.additional_button) AS min
        FROM keyboard"],

        //<!-- Время работы, недель -->

        14 => ["Время работы, недель","0","operating_time","SELECT 
        MAX(keyboard.operating_time) AS max,
        MIN(keyboard.operating_time) AS min
        FROM keyboard"],

        //<!-- Радиус действия, м -->

        15 => ["Радиус действия, м","0","range","SELECT 
        MAX(keyboard.range) AS max,
        MIN(keyboard.range) AS min
        FROM keyboard"],

        //<!--  Длина провода, м -->
       
        16 => ["Длина провода, м","0","wire_length","SELECT 
        MAX(keyboard.wire_length) AS max,
        MIN(keyboard.wire_length) AS min
        FROM keyboard"],

        //<!--  Сенсорная панель -->

        17 => ["Сенсорная панель","1"," ","keyboard.touchpad_C"],

        //<!--  Оплетка кабеля -->

        18 => ["Оплетка кабеля","1"," ","keyboard.cable_braid_C"],

        //<!--  Аудиовход -->

        19 => ["Аудиовход","1"," ","keyboard.audio_input_C"],

        //<!--  Аудиовыход -->
        
        20 => ["Аудиовыход","1"," ","keyboard.audio_input_C"],

        //<!--  Тип аккумулятора -->

        21 => ["Материал", "SELECT type_battery_keyboard.name, type_battery_keyboard.id_type_battery as id
        FROM type_battery_keyboard
        INNER JOIN keyboard
          ON type_battery_keyboard.id_type_battery = keyboard.id_type_battery
        GROUP BY type_battery_keyboard.name, type_battery_keyboard.id_type_battery
        ORDER BY type_battery_keyboard.name","name","keyboard.id_type_battery"],

        //<!--  Глубина, мм -->

        22 => ["Глубина, мм","0","depth","SELECT 
        MAX(keyboard.depth) AS max,
        MIN(keyboard.depth) AS min
        FROM keyboard"],

        //<!--  Ширина, мм -->

        23 => ["Ширина, мм","0","weight","SELECT 
        MAX(keyboard.weight) AS max,
        MIN(keyboard.weight) AS min
        FROM keyboard"],

        //<!--  Толщина, мм -->

        24 => ["Толщина, мм","0","height","SELECT 
        MAX(keyboard.height) AS max,
        MIN(keyboard.height) AS min
        FROM keyboard"],

        //<!--  Вес, кг -->

        25 => ["Вес, кг","0","massa","SELECT 
        MAX(keyboard.massa) AS max,
        MIN(keyboard.massa) AS min
        FROM keyboard"],
    ?>    
];