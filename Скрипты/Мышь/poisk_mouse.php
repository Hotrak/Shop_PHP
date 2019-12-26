1<?php
$leptop_sort_params = [
        //<!-- Производитель -->
        1 => ["Производитель", "SELECT brand_mouse.name, brand_mouse.id_brand_mouse as id
        FROM brand_mouse
        INNER JOIN mouse
          ON brand_mouse.id_brand_mouse = mouse.id_brand
        GROUP BY brand_mouse.name, brand_mouse.id_brand_mouse   
        ORDER BY brand_mouse.name","name","mouse.id_brand"],

        //<!-- Цена -->
        2 => ["Цена","0","cost","SELECT 
        MAX(mouse.cost) AS max,
        MIN(mouse.cost) AS min
        FROM mouse"],

        //<!-- Дата выхода -->
        3 => ["Дата выхода", "SELECT date_out.name, date_out.id_date as id
        FROM date_out
        INNER JOIN mouse
          ON date_out.id_date = mouse.id_date
        GROUP BY date_out.name, date_out.id_date   
        ORDER BY date_out.name","name","mouse.id_date"],

        //<!-- Тип -->
        4 => ["Тип", "SELECT type_mouse.name, type_mouse.id_type_mouse as id
        FROM type_mouse
        INNER JOIN mouse
          ON type_mouse.id_type_mouse = mouse.id_type_mouse
        GROUP BY type_mouse.name, type_mouse.id_type_mouse  
        ORDER BY type_mouse.name","name","mouse.id_type_mouse"],

        //<!-- Назначение -->
        5 => ["Назначение", "SELECT appointment_mouse.name, appointment_mouse.id_appointment_mouse as id
        FROM appointment_mouse
        INNER JOIN mouse
          ON appointment_mouse.id_appointment_mouse = mouse.id_appointment
        GROUP BY appointment_mouse.name, appointment_mouse.id_appointment_mouse  
        ORDER BY appointment_mouse.name","name","mouse.id_appointment"],

        //<!-- Материал -->
        6 => ["Материал", "SELECT material_mouse.name, material_mouse.id_material_mouse as id
        FROM material_mouse
        INNER JOIN mouse
          ON material_mouse.id_material_mouse = mouse.id_material_mouse
        GROUP BY material_mouse.name, material_mouse.id_material_mouse 
        ORDER BY material_mouse.name","name","mouse.id_material_mouse"],

        //<!-- Размер -->
        7 => ["Размер", "SELECT size_mouse.name, size_mouse.id_size_mouse as id
        FROM size_mouse
        INNER JOIN mouse
          ON size_mouse.id_size_mouse = mouse.id_size
        GROUP BY size_mouse.name, size_mouse.id_size_mouse 
        ORDER BY size_mouse.name","name","mouse.id_size"],

        //<!-- Подключение -->
        8 => ["Подключение", "SELECT connection_mouse.name, connection_mouse.id_connection_mouse as id
        FROM connection_mouse
        INNER JOIN mouse
          ON connection_mouse.id_connection_mouse = mouse.id_connect
        GROUP BY connection_mouse.name, connection_mouse.id_connection_mouse 
        ORDER BY connection_mouse.name","name","mouse.id_connect"],

        //<!-- Тип сенсора -->
        9 => ["Подключение", "SELECT sensor_type.name, sensor_type.id_sensor_type as id
        FROM sensor_mouse
        INNER JOIN mouse
          ON sensor_mouse.id_sensor_mouse = mouse.id_sensor
        INNER JOIN sensor_type
          ON sensor_type.id_sensor_type = sensor_mouse.id_type
        GROUP BY sensor_type.name, sensor_type.id_sensor_type
        ORDER BY sensor_type.name","name","mouse.id_sensor","sensor_mouse.id_type"],

        //<!-- Разрешение сенсора, dpi    ПРОВЕРИТЬ НА РОБОТОСПОСОБНОСТЬ-->
        10 => ["Разрешение сенсора, dpi","0","sensor_mouse.resolution_dpi","SELECT
        MAX(sensor_mouse.resolution_dpi) AS max,
        MIN(sensor_mouse.resolution_dpi) AS min
        FROM sensor_mouse
        INNER JOIN mouse
          ON sensor_mouse.id_sensor_mouse = mouse.id_sensor"],

        //<!-- Частота опроса, Гц -->  !!!!! ПРОВЕРИТЬ
        11 => ["Частота опроса, Гц","SELECT sensor_mouse.polling_frequency
        FROM sensor_mouse
        INNER JOIN mouse
          ON sensor_mouse.id_sensor_mouse = mouse.id_sensor
        GROUP BY sensor_mouse.polling_frequency ORDER BY sensor_mouse.polling_frequency","polling_frequency"],

        //<!-- Модель сенсора -->
        12 => ["Модель сенсора", "SELECT sensor_model.name, sensor_model.id_sensor_model as id
        FROM sensor_mouse
        INNER JOIN mouse
          ON sensor_mouse.id_sensor_mouse = mouse.id_sensor
        INNER JOIN sensor_model
          ON sensor_model.id_sensor_model = sensor_mouse.id_model_sensor
        GROUP BY sensor_model.name, sensor_model.id_sensor_model
        ORDER BY sensor_model.name","name","mouse.id_sensor","sensor_mouse.id_model_sensor"],

        //<!-- Изменяемое разрешение -->
        13 => ["Изменяемое разрешение","1"," ","laptop.optical_drive_C"],

        //<!-- Количество кнопок -->
        14 => ["Количество кнопок","0","mouse.count_buttons","SELECT
        MAX(mouse.count_buttons) AS max,
        MIN(mouse.count_buttons) AS min
        FROM mouse"],

        //<!-- Колесо прокрутки -->
        15 => ["Колесо прокрутки", "SELECT scroll_wheel_mouse.name, scroll_wheel_mouse.id_scroll_wheel_mouse as id
        FROM scroll_wheel_mouse
        INNER JOIN mouse
          ON scroll_wheel_mouse.id_scroll_wheel_mouse = mouse.id_scroll_wheel
        GROUP BY scroll_wheel_mouse.name, scroll_wheel_mouse.id_scroll_wheel_mouse  
        ORDER BY scroll_wheel_mouse.name","name","mouse.id_scroll_wheel"],

        //<!-- Цвет -->
        16 => ["Цвет", "SELECT color.name, color.id_color as id
        FROM color
        INNER JOIN mouse
          ON color.id_color = mouse.id_color
        GROUP BY color.name, color.id_color  
        ORDER BY color.name","name","mouse.id_color"],

        //<!-- Радиус действия, м -->
        17 => ["Радиус действия, м","0","mouse.range","SELECT
        MAX(mouse.range) AS max,
        MIN(mouse.range) AS min
        FROM mouse"],

        //<!-- Длина провода, м -->
        18 => ["Длина провода, м","0","mouse.wire_length","SELECT
        MAX(mouse.wire_length) AS max,
        MIN(mouse.wire_length) AS min
        FROM mouse"],

        //<!-- Встроенная память -->
        19 => ["Встроенная память, мб","0","mouse.internal_memory","SELECT
        MAX(mouse.internal_memory) AS max,
        MIN(mouse.internal_memory) AS min
        FROM mouse"],

        //<!-- Время отклика -->
        20 => ["Время отклика, мс","0","mouse.response_time","SELECT
        MAX(mouse.response_time) AS max,
        MIN(mouse.response_time) AS min
        FROM mouse"],

        //<!-- Грузы -->
        21 => ["Грузы","1"," ","mouse.cargo_C"],

        //<!-- Сменные панели -->
        22 => ["Сменные панели","1"," ","mouse.inter_panels_C"],

        //<!-- Оплетка провода -->
        23 => ["Оплетка провода","1"," ","mouse.wire_braid_C"],

        //<!-- Подсветка -->
        24 => ["Подсветка","1"," ","mouse.backlight_C"],

        //<!-- Тип элементов питания -->
        25 => ["Тип элементов питания", "SELECT type_battery_mouse.name, type_battery_mouse.id_type_battery_mouse as id
        FROM type_battery_mouse
        INNER JOIN mouse
          ON type_battery_mouse.id_type_battery_mouse = mouse.id_type_battery
        GROUP BY type_battery_mouse.name, type_battery_mouse.id_type_battery_mouse 
        ORDER BY type_battery_mouse.name","name","mouse.id_type_battery"],

        //<!-- Тип аккумулятора -->
        26 => ["Тип аккумулятора", "SELECT battery_type_mouse.name, battery_type_mouse.id_battery_type_mouse as id
        FROM battery_type_mouse
        INNER JOIN mouse
          ON battery_type_mouse.id_battery_type_mouse = mouse.id_battery_type
        GROUP BY battery_type_mouse.name, battery_type_mouse.id_battery_type_mouse
        ORDER BY battery_type_mouse.name","name","mouse.id_battery_type"],
 
        //<!-- Время работы, недель -->
        27 => ["Время работы, ч","0"," mouse.working_time","SELECT
        MAX(mouse.working_time) AS max,
        MIN(mouse.working_time) AS min
        FROM mouse"],

        //<!-- Индикатор заряда батареи -->
        28 => ["Индикатор заряда батареи","1"," ","mouse.charge_indicator_C"],

        //<!-- Зарядное устройство в комплекте -->
        29 => ["Зарядное устройство в комплекте","1"," ","mouse.charge_included_C"],

        //<!-- Зарядка от USB -->
        30 => ["Зарядка от USB","1"," ","mouse.charge_from_USB_C"],

        //<!-- Беспроводная зарядка -->
        31 => ["Беспроводная зарядка","1"," ","mouse.wireless_charger_C"],

        //<!-- Тихий клик -->
        32 => ["Тихий клик","1"," ","mouse.silent_click_C"],

        //<!-- Длина, см -->
        33 => ["Длина, см","0","length","SELECT 
        MAX(mouse.length) AS max,
        MIN(mouse.length) AS min
        FROM mouse"],

        //<!-- Ширина, см -->
        34 => ["Ширина, см","0","weight","SELECT 
        MAX(mouse.weight) AS max,
        MIN(mouse.weight) AS min
        FROM mouse"],

        //<!-- Высота, см -->
        35 => ["Высота, см","0","height","SELECT 
        MAX(mouse.height) AS max,
        MIN(mouse.height) AS min
        FROM mouse"],

        //<!-- Вес, Г -->
        36 => ["Вес, г","0","massa","SELECT 
        MAX(mouse.massa) AS max,
        MIN(mouse.massa) AS min
        FROM mouse"],
    ?>    
];