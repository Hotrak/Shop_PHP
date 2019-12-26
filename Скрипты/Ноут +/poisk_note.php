1<?php
$leptop_sort_params = [
        //<!-- Производитель -->
        0 => ["Производитель", "SELECT brand_laptop.name,brand_laptop.id_brand_laptop as id 
        FROM brand_laptop INNER JOIN laptop ON brand_laptop.id_brand_laptop = laptop.id_brand
        GROUP BY brand_laptop.name,brand_laptop.id_brand_laptop  
        ORDER BY brand_laptop.name","name","laptop.id_brand"],

        //<!-- Цена -->
        1 => ["Цена","0","cost","SELECT 
        MAX(laptop.cost) AS max,
        MIN(laptop.cost) AS min
        FROM laptop"],

        //<!-- Дата выхода -->
        2 => ["Дата выхода","SELECT date_out.name,date_out.id_date as id
        FROM date_out
        INNER JOIN laptop
        ON date_out.id_date = laptop.id_date
        GROUP BY  date_out.name, date_out.id_date
        ORDER BY date_out.name","name","laptop.id_date"],

        //<!-- Тип -->
        3 => ["Тип","SELECT type_laptop.name,type_laptop.id_type_laptop as id
        FROM type_laptop
        INNER JOIN laptop
        ON type_laptop.id_type_laptop = laptop.id_type_laptope
        GROUP BY type_laptop.name, type_laptop.id_type_laptop 
        ORDER BY type_laptop.name","name","id_type_laptope"],

        //<!-- Назначение -->
        4 => ["Назначение","SELECT appointment_laptop.name,appointment_laptop.id_appointment_laptop as id
        FROM appointment_laptop
        INNER JOIN laptop
        ON appointment_laptop.id_appointment_laptop = laptop.id_appointment
        GROUP BY appointment_laptop.name, appointment_laptop.id_appointment_laptop 
        ORDER BY appointment_laptop.name","name","id_appointment"],

        //<!-- Продуктовая линейка -->
        5 => ["Продуктовая линейка","SELECT product_line_laptop.name,product_line_laptop.id_product_line_laptop as id
        FROM product_line_laptop
        INNER JOIN laptop
        ON product_line_laptop.id_product_line_laptop = laptop.id_product_line
        GROUP BY  product_line_laptop.name, product_line_laptop.id_product_line_laptop
        ORDER BY product_line_laptop.name","name","id_product_line"],
        
        //<!-- Экран!!!!!!!!!!!!!! -->
        6 => ["Диагональ экрана","SELECT sceen_deagonal.name,sceen_deagonal.id_sceen_deagonal as id
        FROM screen_laptop
        INNER JOIN laptop
        ON screen_laptop.id_screen_laptop = laptop.id_screen
        INNER JOIN sceen_deagonal
        ON sceen_deagonal.id_sceen_deagonal = screen_laptop.id_diagonal
        GROUP BY sceen_deagonal.name, sceen_deagonal.id_sceen_deagonal 
        ORDER BY sceen_deagonal.name","name","id_screen","screen_laptop.id_diagonal"],
        7 => ["Разрешение экрана","SELECT screen_permission.name,screen_permission.id_permission as id
        FROM screen_laptop
        INNER JOIN laptop
        ON screen_laptop.id_screen_laptop = laptop.id_screen
        INNER JOIN screen_permission
        ON screen_permission.id_permission = screen_laptop.id_permission
        GROUP BY screen_permission.name,screen_permission.id_permission
        ORDER BY screen_permission.name","name","id_screen","screen_laptop.id_permission"],
        8 => ["Частота матрицы","SELECT screen_frequency.name,screen_frequency.id_screen_frequency as id
        FROM screen_laptop
        INNER JOIN laptop
        ON screen_laptop.id_screen_laptop = laptop.id_screen
        INNER JOIN screen_frequency
        ON screen_frequency.id_screen_frequency = screen_laptop.id_frequency
        GROUP BY screen_frequency.name,screen_frequency.id_screen_frequency 
        ORDER BY  screen_frequency.name","name","id_screen","screen_laptop.id_frequency"],
        9 => ["Технология экрана","SELECT screen_technology.name, screen_technology.id_screen_technology as id
        FROM screen_laptop
        INNER JOIN laptop
        ON screen_laptop.id_screen_laptop = laptop.id_screen
        INNER JOIN screen_technology
        ON screen_technology.id_screen_technology = screen_laptop.id_screen_technology
        GROUP BY screen_technology.name,screen_technology.id_screen_technology 
        ORDER BY  screen_technology.name","name","id_screen","screen_laptop.id_screen_technology"],
        10 => ["Поверхность экрана","SELECT screen_surface.name,screen_surface.id_screen_surface as id
        FROM screen_laptop
        INNER JOIN laptop
        ON screen_laptop.id_screen_laptop = laptop.id_screen
        INNER JOIN screen_surface
        ON screen_surface.id_screen_surface = screen_laptop.id_surface
        GROUP BY screen_surface.name,screen_surface.id_screen_surface
        ORDER BY screen_surface.name","name","id_screen","screen_laptop.id_surface"],
        11 => ["Сенсорный экран","1"," ","screen_laptop.touch_screen_C"],
        12 => ["Поддержка ввода пером","1"," ","screen_laptop.pen_input_C"],

        //<!-- Процессор -->
        13 => ["Платформа процессора","SELECT processor_platforma.name, processor_platforma.id_processor_platforma as id
        FROM processor_laptop
        INNER JOIN laptop
        ON processor_laptop.id_processor = laptop.id_processor
        INNER JOIN processor_platforma
        ON processor_platforma.id_processor_platforma = processor_laptop.id_platforma
        GROUP BY processor_platforma.name, processor_platforma.id_processor_platforma
        ORDER BY processor_platforma.name","name","id_processor","processor_laptop.id_platforma"],
        14 => ["Процессор","SELECT processor_name.name,processor_name.id_processor_name as id
        FROM processor_laptop
        INNER JOIN laptop
        ON processor_laptop.id_processor = laptop.id_processor
        INNER JOIN processor_name
        ON processor_name.id_processor_name = processor_laptop.id_name_processor
        GROUP BY processor_name.name,processor_name.id_processor_name 
        ORDER BY processor_name.name","name","id_processor","processor_laptop.id_name_processor"],  
        15 => ["Модель процессора","SELECT processor_model.name,processor_model.id_processor_model as id
        FROM processor_laptop
        INNER JOIN laptop
        ON processor_laptop.id_processor = laptop.id_processor
        INNER JOIN processor_model
        ON processor_model.id_processor_model = processor_laptop.id_model_processor
        GROUP BY processor_model.name,processor_model.id_processor_model
        ORDER BY processor_model.name","name","id_processor","processor_laptop.id_model_processor"],
        16 => ["Количество ядер","SELECT processor_cores.name,processor_cores.id_processor_cores as id
        FROM processor_cores
        INNER JOIN processor_laptop
        ON processor_cores.id_processor_cores = processor_laptop.id_number_cores
        INNER JOIN laptop
        ON processor_laptop.id_processor = laptop.id_processor
        GROUP BY  processor_cores.name,processor_cores.id_processor_cores 
        ORDER BY processor_cores.name","name","id_processor","processor_laptop.id_number_cores"],

        //<!-- Видеокарта -->
        17 => ["Графический адаптер","SELECT videocard_model.name,videocard_model.id_videocard_model as id
        FROM videocard_laptop
        INNER JOIN laptop
        ON videocard_laptop.id_videocard_laptop = laptop.id_videocard
        INNER JOIN videocard_model
        ON videocard_model.id_videocard_model = videocard_laptop.id_model
        GROUP BY videocard_model.name,videocard_model.id_videocard_model
        ORDER BY videocard_model.name","name","id_videocard","videocard_laptop.id_model"],
        18 => ["Локальная видеопамять, ГБ","SELECT videocard_memory.name,videocard_memory.id_videocard_memory as id
        FROM videocard_laptop
        INNER JOIN laptop
        ON videocard_laptop.id_videocard_laptop = laptop.id_videocard
        INNER JOIN videocard_memory
        ON videocard_memory.id_videocard_memory = videocard_laptop.id_memory
        GROUP BY  videocard_memory.name,videocard_memory.id_videocard_memory 
        ORDER BY  videocard_memory.name","name","id_videocard","videocard_laptop.id_memory"],
        19 => ["Дискретная графика","1","laptop.discrete_graphicss_C"],

        //<!-- Оперативная память -->
        20 => ["Тип оперативной памяти","SELECT ram_type.name,ram_type.id_ram_type as id
        FROM ram_laptop
        INNER JOIN laptop
        ON ram_laptop.id_ram = laptop.id_ram
        INNER JOIN ram_type
        ON ram_type.id_ram_type = ram_laptop.id_type
        GROUP BY  ram_type.name,ram_type.id_ram_type 
        ORDER BY  ram_type.name","name","id_ram","ram_laptop.id_type"],
        21 => ["Объём памяти, ГБ","SELECT ram_amount_memory.name,ram_amount_memory.id_ram_amount_memory as id
        FROM ram_laptop
        INNER JOIN laptop
        ON ram_laptop.id_ram = laptop.id_ram
        INNER JOIN ram_amount_memory
        ON ram_amount_memory.id_ram_amount_memory = ram_laptop.id_amount_memory
        GROUP BY ram_amount_memory.name,ram_amount_memory.id_ram_amount_memory
         ORDER BY ram_amount_memory.name","name","id_ram","ram_laptop.id_amount_memory"],

        //<!-- Материал-->
        22 => ["Материал","SELECT material_laptop.name,material_laptop.id_material as id
        FROM material_laptop
        INNER JOIN laptop
        ON material_laptop.id_material = laptop.id_material
        GROUP BY material_laptop.name,material_laptop.id_material 
        ORDER BY material_laptop.name","name","id_material"],

        //<!-- Цвет -->
        23 => ["Цвет","SELECT color.name,color.id_color as id
        FROM color
        INNER JOIN laptop
        ON color.id_color = laptop.id_color
        GROUP BY  color.name,color.id_color
        ORDER BY  color.name","name","id_color"],

        //<!-- Операц. система -->
        24 => ["Операционная система","SELECT operating_system_laptop.name,operating_system_laptop.id_operating_system as id
        FROM operating_system_laptop
        INNER JOIN laptop
        ON operating_system_laptop.id_operating_system = laptop.id_operating_system
        GROUP BY operating_system_laptop.name,operating_system_laptop.id_operating_system
        ORDER BY operating_system_laptop.name","name","id_operating_system"],
       
        //<!-- Батарея !!!!!!!!!!!!!!!!!ПРОВЕРИТЬ!!!!!!!!!!-->
        25 => ["Время работы, Ч","0","accumulator_tank.name","SELECT 
        MAX(accumulator_tank.name) AS max,
        MIN(accumulator_tank.name) AS min
        FROM accumulator_tank"],

        //<!-- HDD -->
        26 => ["HDD, ГБ","SELECT laptop.HDD
        FROM laptop
        GROUP BY laptop.HDD ORDER BY laptop.HDD","HDD"],

        //<!-- SSD -->
        27 => ["SSD, ГБ","SELECT laptop.SSD
        FROM laptop
        GROUP BY laptop.SSD ORDER BY laptop.SSD","SSD"],

        //<!-- Оптический привод -->
        28 => ["Оптический привод","1"," ","laptop.optical_drive_C"],

        //<!-- Камера -->
        29 => ["Веб-камера","1"," ","laptop.camera_C"],

        //<!-- Динамик -->
        30 => ["Встроенные динамики","1"," ","laptop.internal_speaker_C"],

        //<!-- Numpad -->
        31 => ["Numpad","1"," "," ","laptop.Numpad_C"],

        //<!-- Подсветка клавиатуры -->
        32 => ["Подсветка клавиатуры","1"," ","laptop.keyboard_illumination_C"],

        //<!-- Заводская «кириллица» на клавишах -->
        33 => ["Заводская «кириллица»","1"," ","laptop.factory_cyrillic_C"],

        //<!-- Тачпад -->
        34 => ["Тачпад","1"," ","laptop.touch_pad_C"],

        //<!-- защита конфиденциальности -->
        35 => ["Защита конфиденциальности","1"," ","laptop.privacy_protection_C"],

        //<!-- NFC -->
        36 => ["NFC","1"," ","laptop.NFC_C"],

        //<!-- Bluettoth -->
        37 => ["Bluettoth","1"," ","laptop.Bluetooth_C"],

        //<!-- LAN -->
        38 => ["LAN","1"," ","laptop.LAN_C"],

        //<!-- Количество USB portov -->
        39 => ["Количество USB-портов","SELECT count_USB.name,count_usb.id_count_USB
        FROM count_usb
        INNER JOIN laptop
        ON count_usb.id_count_USB = laptop.id_count_USB
        GROUP BY count_USB.name,count_usb.id_count_USB
         ORDER BY count_USB.name","name","id_count_USB"],

        //<!-- VGA -->
        40 => ["VGA","1"," ","laptop.VGA_C"],

       //<!-- HDMI -->
        41 => ["HDMI","1"," ","laptop.HDMI_C"],

        //<!-- Аудио выход -->
        42 => ["Аудио выход","1"," ","laptop.Audio_outputs_C"],

        //<!-- Подсветка ноутбука -->
        43 => ["Подсветка ноутбука","1"," ","laptop.housing_illumination_C"],

       //<!-- защищенный корпус -->
        44 => ["Защищенный корпус","1"," ","laptop.protected_housing_C"],

        //<!-- Микрофон -->
        45 => ["Микрофон","1"," ","laptop.microphone_C"],

        46 => ["Ширина, мм","0","width","SELECT 
        MAX(laptop.width) AS max,
        MIN(laptop.width) AS min
        FROM laptop"],
        47 => ["Глубина, мм","0","depth","SELECT 
        MAX(laptop.depth) AS max,
        MIN(laptop.depth) AS min
        FROM laptop"],
        48 => ["Толщина, мм","0","thickness","SELECT 
        MAX(laptop.thickness) AS max,
        MIN(laptop.thickness) AS min
        FROM laptop"],
        49 => ["Вес, кг","0","massa","SELECT 
        MAX(laptop.massa) AS max,
        MIN(laptop.massa) AS min
        FROM laptop"],
    ?>    
];