<?php

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
      ORDER BY processor_name.name","name","id_processor",processor_laptop.id_name_processor],  
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
      31 => ["Numpad","1"," ","laptop.Numpad_C"],

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
      
  ];
  $mat_sort_params = [
       //<!— Производитель —>
        0 => ["Производитель", "SELECT brand_mat.name,brand_mat.id_brand_mat as id
        FROM brand_mat INNER JOIN mat ON brand_mat.id_brand_mat = mat.id_brand
        GROUP BY brand_mat.name,brand_mat.id_brand_mat
        ORDER BY brand_mat.name","name","mat.id_brand"],

        //<!— Цена —>
        1 => ["Цена","0","cost","SELECT
        MAX(mat.cost) AS max,
        MIN(mat.cost) AS min
        FROM mat"],

        //<!— Дата выхода —>
        2 => ["Дата выхода","SELECT date_out.name, date_out.id_date as id
        FROM date_out
        INNER JOIN mat ON date_out.id_date = mat.id_date
        GROUP BY date_out.name, date_out.id_date
        ORDER BY date_out.name","name","mat.id_date"],

        //<!— Тип —>
        3 => ["Тип","SELECT type_mat.name, type_mat.id_type_mat as id
        FROM type_mat
        INNER JOIN mat
        ON type_mat.id_type_mat = mat.id_type
        GROUP BY type_mat.name,type_mat.id_type_mat
        ORDER BY type_mat.name","name","mat.id_type"],

        //<!— Совместимость —>

        4 => ["Совместимость","SELECT compatibility_mat.name, compatibility_mat.id_compatibility_mat as id
        FROM compatibility_mat
        INNER JOIN mat
        ON compatibility_mat.id_compatibility_mat = mat.id_compatibility
        GROUP BY compatibility_mat.name, compatibility_mat.id_compatibility_mat
        ORDER BY compatibility_mat.name","name","mat.id_compatibility"],

        //<!— Материал поверхности —>

        5 => ["Материал поверхности"," SELECT material_surface.name, material_surface.id_material_surface as id
        FROM material_surface
        INNER JOIN mat
        ON material_surface.id_material_surface = mat.id_material
        GROUP BY material_surface.name, material_surface.id_material_surface
        ORDER BY material_surface.name","name","mat.id_material"],

        //<!— Цвет —>

        6 => ["Цвет"," SELECT color.name, color.id_color as id
        FROM color
        INNER JOIN mat
        ON color.id_color = mat.id_color
        GROUP BY color.name, color.id_color
        ORDER BY color.name","name","mat.id_color"],

        //<!— Глубина —>
        7 => ["Глубина, мм","0","deep","SELECT
        MAX(mat.deep) AS max,
        MIN(mat.deep) AS min
        FROM mat"],

        //<!— Ширина —>
        8 => ["Ширина, мм","0","weight","SELECT
        MAX(mat.weight) AS max,
        MIN(mat.weight) AS min
        FROM mat"],

        //<!— Толщина —>
        9 => ["Толщина, мм","0","height","SELECT
        MAX(mat.height) AS max,
        MIN(mat.height) AS min
        FROM mat"],

        //<!— Вес —>
        10 => ["Вес, кг","0","massa","SELECT
        MAX(mat.massa) AS max,
        MIN(mat.massa) AS min
        FROM mat"],

        //<!— Подушечка под запястие —>
        11 => ["Подушечка под запястие","1"," ","mat.pillow_C"],

        //<!— Бортик —>
        12 => ["Бортик","1"," ","mat.skirting_C"],

        //<!— Крепление для кабеля —>
        13 => ["Крепление для кабеля","1"," ","mat.binding_C"],

        //<!— Подсветка —>
        14 => ["Подсветка","1"," ","mat.illumination_C"],

        //<!— USB-порт —>
        15 => ["USB-порт","1"," ","mat.usb_C"],

        //<!— Беспроводная зарядка —>
        16 => ["Беспроводная зарядка","1"," ","mat.exercise_C"],
    ];
   $kaybord_sort_params = [
   
  ];
  $headphones_sort_params = [
    0 => ["Производитель", "SELECT brand_headphones.name, brand_headphones.id_brand_headphones as id 
        FROM brand_headphones
        INNER JOIN headphones
          ON brand_headphones.id_brand_headphones = headphones.id_brand
        GROUP BY brand_headphones.name, brand_headphones.id_brand_headphones  
        ORDER BY brand_headphones.name","name","headphones.id_brand"],

        //<!-- Цена -->

        1 => ["Цена","0","cost","SELECT 
        MAX(headphones.cost) AS max,
        MIN(headphones.cost) AS min
        FROM headphones"],

        //<!-- Дата выхода -->

        2 => ["Дата выхода", "SELECT date_out.name, date_out.id_date as id
        FROM date_out
        INNER JOIN headphones
          ON date_out.id_date = headphones.id_date
        GROUP BY date_out.name, date_out.id_date 
        ORDER BY date_out.name","name","headphones.id_date"],

        //<!-- Конструкция -->

        3 => ["Конструкция", "SELECT design_headphones.name, design_headphones.id_design_headphones as id
        FROM design_headphones
        INNER JOIN headphones
          ON design_headphones.id_design_headphones = headphones.id_design
        GROUP BY design_headphones.name, design_headphones.id_design_headphones
        ORDER BY design_headphones.name","name","headphones.id_design"],

        //<!-- Тип -->

        4 => ["Тип", "SELECT type_headphones.name, type_headphones.id_type_headphones as id
        FROM type_headphones
        INNER JOIN headphones
          ON type_headphones.id_type_headphones = headphones.id_typeheadphones
        GROUP BY type_headphones.name, type_headphones.id_type_headphones
        ORDER BY type_headphones.name","name","headphones.id_typeheadphones"],

        //<!-- Беспроводные наушники -->

        5 => ["Беспроводные наушники","1"," ","headphones.wireless_C"],

        //<!--Тип беспроводных наушников -->

        6 => ["Тип беспроводных наушников", "SELECT type_wirelles_headphones.name, type_wirelles_headphones.id_type_wirelles as id
        FROM type_wirelles_headphones
        INNER JOIN headphones
          ON type_wirelles_headphones.id_type_wirelles = headphones.id_type_wireless
        GROUP BY type_wirelles_headphones.name,type_wirelles_headphones.id_type_wirelles
        ORDER BY type_wirelles_headphones.name","name","headphones.id_type_wireless"],

        //<!-- Назначение -->

        7 => ["Назначение", "SELECT appointment_headphones.name, appointment_headphones.id_appointment_headphones as id
        FROM appointment_headphones
        INNER JOIN headphones
          ON appointment_headphones.id_appointment_headphones = headphones.id_appointment
        GROUP BY appointment_headphones.name, appointment_headphones.id_appointment_headphones
        ORDER BY appointment_headphones.name","name","headphones.id_appointment"],

        //<!-- Акустическое оформление -->

        8 => ["Акустическое оформление", "SELECT acoustic_design_headphones.name, acoustic_design_headphones.id_acoustic_design_headphones as id
        FROM acoustic_design_headphones
        INNER JOIN headphones
          ON acoustic_design_headphones.id_acoustic_design_headphones = headphones.id_acoustic
        GROUP BY acoustic_design_headphones.name, acoustic_design_headphones.id_acoustic_design_headphones
        ORDER BY acoustic_design_headphones.name","name","headphones.id_acoustic"],

        //<!-- Крепление -->

        9 => ["Крепление", "SELECT binding_headphones.name, binding_headphones.id_binding_headphones as id
        FROM binding_headphones
        INNER JOIN headphones
          ON binding_headphones.id_binding_headphones = headphones.id_binding
        GROUP BY binding_headphones.name, binding_headphones.id_binding_headphones
        ORDER BY binding_headphones.name","name","headphones.id_binding"],

        //<!-- Штекер -->

        10 => ["Штекер", "SELECT plug_headphones.name, plug_headphones.id_plug_headphones as id
        FROM plug_headphones
        INNER JOIN headphones
          ON plug_headphones.id_plug_headphones = headphones.id_plug
        GROUP BY plug_headphones.name, plug_headphones.id_plug_headphones 
        ORDER BY plug_headphones.name","name","headphones.id_plug"],

        //<!-- Активное шумоподавление микрофона -->

        11 => ["Активное шумоподавление микрофона","1"," ","headphones.active_noise_reduction_C"],

        //<!-- Встроенный плеер -->

        12 => ["Встроенный плеер","1"," ","headphones.built_in_player_C"],

        //<!-- Длина кабеля -->

        13 => ["Длина кабеля, м","0","cable_length","SELECT 
        MAX(headphones.cable_length) AS max,
        MIN(headphones.cable_length) AS min
        FROM headphones"],

        //<!-- Тип излучателя -->

        14 => ["Тип излучателя", "SELECT emitter_type_headphones.name, emitter_type_headphones.id_emitter_type_headphones as id 
        FROM emitter_type_headphones
        INNER JOIN headphones
          ON emitter_type_headphones.id_emitter_type_headphones = headphones.id_emitter
        GROUP BY emitter_type_headphones.name, emitter_type_headphones.id_emitter_type_headphones
        ORDER BY emitter_type_headphones.name","name","headphones.id_emitter"],

        //<!-- Цвет -->

        15 => ["Цвет", "SELECT color.name, color.id_color as id
        FROM color
        INNER JOIN headphones
          ON color.id_color = headphones.id_color
        GROUP BY color.name, color.id_color
        ORDER BY color.name","name","headphones.id_color"],

        //<!-- Комплектация --> 

        16 => ["Комплектация", "SELECT picking_headphones.name, picking_headphones.id_picking_headphones as id 
        FROM picking_headphones
        INNER JOIN headphones
          ON picking_headphones.id_picking_headphones = headphones.id_picking
        GROUP BY picking_headphones.name, picking_headphones.id_picking_headphones
        ORDER BY picking_headphones.name","name","headphones.id_picking"],

        //<!-- Складная конструкция -->

        17 => ["Складная конструкция", "SELECT foldable_design_headphones.name, foldable_design_headphones.id_foldable_design_headphones as id
        FROM foldable_design_headphones
        INNER JOIN headphones
          ON foldable_design_headphones.id_foldable_design_headphones = headphones.id_foldable
        GROUP BY foldable_design_headphones.name, foldable_design_headphones.id_foldable_design_headphones
        ORDER BY foldable_design_headphones.name","name","headphones.id_foldable"],

        //<!-- Пыле-, влаго-, ударопрочность -->

        18 => ["Пыле-, влаго-, ударопрочность","1"," ","headphones.dust_C"],

        //<!-- Материал амбушюр -->

        19 => ["Материал амбушюр", "SELECT material_ear_pads_headphones.name, material_ear_pads_headphones.id_material_ear_pads_headphones as id
        FROM material_ear_pads_headphones
        INNER JOIN headphones
          ON material_ear_pads_headphones.id_material_ear_pads_headphones = headphones.id_material_ear
        GROUP BY material_ear_pads_headphones.name, material_ear_pads_headphones.id_material_ear_pads_headphones
        ORDER BY material_ear_pads_headphones.name","name","headphones.id_material_ear"],

        //<!-- Материал корпуса -->

        20 => ["Материал корпуса", "SELECT body_material_headphones.name, body_material_headphones.id_body_material_headphones as id
        FROM body_material_headphones
        INNER JOIN headphones
          ON body_material_headphones.id_body_material_headphones = headphones.id_body_material
        GROUP BY body_material_headphones.name, body_material_headphones.id_body_material_headphones
        ORDER BY body_material_headphones.name","name","headphones.id_body_material"],

        //<!-- Количество арматурных излучателей -->

        21 => ["Количество арматурных излучателей","SELECT headphones.number_reinforcing_emitters
        FROM headphones
        GROUP BY headphones.number_reinforcing_emitters 
        ORDER BY headphones.number_reinforcing_emitters","number_reinforcing_emitters"],
        
        //<!-- Диаметр излучателя --> 

        22 => ["Диаметр излучателя, мм","0","diameter_emitter","SELECT 
        MAX(headphones.diameter_emitter) AS max,
        MIN(headphones.diameter_emitter) AS min
        FROM headphones"],

        //<!-- Нижняя граница част. диапазона -->

        23 => ["Нижняя граница част. диапазона, Гц","0","lower_border_partial_range","SELECT 
        MAX(headphones.lower_border_partial_range) AS max,
        MIN(headphones.lower_border_partial_range) AS min
        FROM headphones"],

        //<!-- Верхняя граница част. диапазона -->

        24 => ["Верхняя граница част. диапазона, Гц","0","upper_bound_chast_range","SELECT 
        MAX(headphones.upper_bound_chast_range) AS max,
        MIN(headphones.upper_bound_chast_range) AS min
        FROM headphones"],

        //<!-- Чувствительность -->

        25 => ["Чувствительность, дБ/мВт","0","sensitivity","SELECT 
        MAX(headphones.sensitivity) AS max,
        MIN(headphones.sensitivity) AS min
        FROM headphones"],

        //<!-- Объемное звучание -->

        26 => ["Объемное звучание","1"," ","headphones.surround_sound_C"],

        //<!-- Подключение кабеля -->

        27 => ["Материал корпуса", "SELECT cable_connection_headphones.name, cable_connection_headphones.id_cable_connection_headphones as id
        FROM cable_connection_headphones
        INNER JOIN headphones
          ON cable_connection_headphones.id_cable_connection_headphones = headphones.id_cable_connection
        GROUP BY cable_connection_headphones.name, cable_connection_headphones.id_cable_connection_headphones
        ORDER BY cable_connection_headphones.name","name","headphones.id_cable_connection"],
       
        //<!-- Пульт управления -->
        
        28 => ["Пульт управления","1"," ","headphones.wired_remote_C"],

        //<!-- Форма штекера -->

        29 => ["Форма штекера", "SELECT shape_plug_headphones.name, shape_plug_headphones.id_shape_plug_headphones as id
        FROM shape_plug_headphones
        INNER JOIN headphones
          ON shape_plug_headphones.id_shape_plug_headphones = headphones.id_shape_plug
        GROUP BY shape_plug_headphones.name, shape_plug_headphones.id_shape_plug_headphones
        ORDER BY shape_plug_headphones.name","name","headphones.id_shape_plug"],

        //<!-- Конструкция микрофона -->

        30 => ["Конструкция микрофона", "SELECT microphone_design_headphones.name, microphone_design_headphones.id_microphone_design_headphones as id
        FROM microphone_design_headphones
        INNER JOIN headphones
          ON microphone_design_headphones.id_microphone_design_headphones = headphones.id_microphone
        GROUP BY microphone_design_headphones.name, microphone_design_headphones.id_microphone_design_headphones
        ORDER BY microphone_design_headphones.name","name","headphones.id_microphone"],

        //<!-- Виброотклик -->

        31 => ["Виброотклик","1"," ","headphones.vibration_response_C"],

        //<!-- NFC -->

        32 => ["NFC","1"," ","headphones.nfc_C"],

        //<!-- Подсветка -->

        33 => ["Подсветка","1"," ","headphones.illumination_C"],

        //<!-- Шумоподавление -->

        34 => ["Шумоподавление","1"," ","headphones.noise_reduction_C"],

        //<!-- Тип беспроводного интерфейса -->

        35 => ["Тип беспроводного интерфейса", "SELECT type_wireless_interface_headpones.name, type_wireless_interface_headpones.id_type_wireless_interface_headpones as id
        FROM type_wireless_interface_headpones
        INNER JOIN headphones
          ON type_wireless_interface_headpones.id_type_wireless_interface_headpones = headphones.id_type_wireless_inter
        GROUP BY type_wireless_interface_headpones.name, type_wireless_interface_headpones.id_type_wireless_interface_headpones
        ORDER BY type_wireless_interface_headpones.name","name","headphones.id_type_wireless_inter"],

        //<!-- Bluetoth -->

        36 => ["Bluetoth","1"," ","headphones.bluetooth"],

        //<!-- Радиус действия (беспроводной) -->

        37 => ["Радиус действия (беспроводной), м","0","range_wireless","SELECT 
        MAX(headphones.range_wireless) AS max,
        MIN(headphones.range_wireless) AS min
        FROM headphones"],

        //<!-- Емкость аккумулятора -->

        38 => ["Емкость аккумулятора, мАч","0","battery_capacity","SELECT 
        MAX(headphones.battery_capacity) AS max,
        MIN(headphones.battery_capacity) AS min
        FROM headphones"],

        //<!-- Время работы от аккумулятора -->

        39 => ["Время работы от аккумулятора, ч","0","battery_life","SELECT 
        MAX(headphones.battery_life) AS max,
        MIN(headphones.battery_life) AS min
        FROM headphones"],

        //<!-- Амбушюры в косплекте -->

        40 => ["Амбушюры в косплекте","1"," ","headphones.ear_pads_included"],

        //<!-- Вес -->

        41 => ["Вес, г","0","massa","SELECT 
        MAX(headphones.massa) AS max,
        MIN(headphones.massa) AS min
        FROM headphones"],

  ];
  $muse_sort_params = [
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
  ];
  $keybord_sort_params = [
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
        
        2 => ["Дата выхода", "SELECT date_out.name, date_out.id_date as id
        FROM date_out
        INNER JOIN keyboard
          ON date_out.id_date = keyboard.id_date
        GROUP BY date_out.name, date_out.id_date
        ORDER BY date_out.name","name","keyboard.id_date"],

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
        GROUP BY connection_keyboard.name, connection_keyboard.id_connection_keyboard
        ORDER BY connection_keyboard.name","name","keyboard.id_connection"],

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

        10 => ["Цвет", "SELECT color.name, color.id_color as id
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

        21 => ["Тип аккумулятора", "SELECT type_battery_keyboard.name, type_battery_keyboard.id_type_battery as id
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
        25 => ["Толщина, мм","0","height","SELECT 
        MAX(keyboard.height) AS max,
        MIN(keyboard.height) AS min 
        FROM keyboard"],
        

        //<!--  Вес, кг -->

        26 => ["Вес, кг","0","massa","SELECT 
        MAX(keyboard.massa) AS max,
        MIN(keyboard.massa) AS min 
        FROM keyboard"],
  ];
  $leptop_property = [

    //Общая информация
    0 => [2,"Общая информация"],
    1 => [0,"Дата выхода","dateout"],// Обычное 0
    2 => [0,"Продуктовая линейка","productlinelaptop"],
    3 => [0,"Тип","typelaptop"],
    4 => [0,"Бренд","brandlaptop"],
    5 => [0,"Назначение","appointmentlaptop"],
    
    //Процессор 
    6 => [2,"Процессор"],
    7 => [0,"Платформа","processorplatforma"],
    8 => [0,"Процессор","processorname"],
    9 => [0,"Модель процессора","processormodel"],
    10 => [0,"Количество ядер","processorcores"],
    11 => [0,"Тактовая частота","clock_frequency","","МГц"],
    12 => [0,"Turbo-частота","turbo_frequency","","МГц"],
    13 => [0,"Энергопотребление процессора (TDP)","energy_consumption","","Вт"],
    
    //Конструкция
    
    14 => [2,"Конструкция"],
    15 => [0,"Материал корпуса","materiallaptop"],
    16 => [0,"Цвет корпуса","color"],
    17 => [1,"Подсветка корпуса","housing_illumination_C"],
    18 => [1,"Защищенный корпус","protected_housing_C"],
    
    //Размеры и вес
    
    19 => [2,"Размеры и вес"],
    20 => [0,"Ширина","width","","мм"],
    21 => [0,"Глубина","depth","","мм"],
    22 => [0,"Толщина","thickness","","мм"],
    23 => [0,"Вес","massa","","мм"],
    
    //Экран
    
    24 => [2,"Экран"],
    25 => [0,"Диагональ экрана","sceendeagonal"],
    26 => [0,"Разрешение экрана","screenpermission"],
    27 => [0,"Частота матрицы","screenfrequency","","Гц"],
    28 => [0,"Технология экрана","screentechnology"],
    29 => [0,"Поверхность экрана","screensurface"],
    30 => [1,"Сенсорный экран","touch_screen_C"],
    31 => [1,"Поддержка ввода пером","pen_input_C"],
    
    //Оперативная память
    
    32 => [2,"Оперативная память"],
    33 => [0,"Тип оперативной памяти","ramtype"],
    34 => [0,"Частота оперативной памяти","ramfrequency","","МГц"],
    35 => [0,"Объём памяти","ramamountmemory","","ГБ"],
    36 => [0,"Максимальный объём памяти","rammaxmemory","","ГБ"],
    37 => [0,"Всего слотов памяти","ramtotalmemory"],
    
    //Хранение данных
    
    38 => [2,"Хранение данных"],
    39 => [0,"HDD емкость накопителя","HDD","","Гб"],
    40 => [0,"SSD емкость накопителя","SSD","","Гб"],
    41 => [1,"Оптический привод","optical_drive_C"],
    

    //Графика

    42 => [2,"Графика"],
    43 => [0,"Графический адаптер","videocardmodel","","Гб"], 
    44 => [0,"Локальная видеопамять","videocardmemory","","Гб"], 
    45 => [1,"Дискретная графика","discrete_graphicss_C"], 

    //Камера и звук

    46 => [2,"Камера и звук"],
    47 => [1,"Камера","camera_C"], 
    48 => [1,"Встроенный микфрофон","microphone_C"], 
    49 => [1,"Встроенные динамики","internal_speaker_C"], 
    
    //Клавиатура и тачпад Управление курсором

    50 => [2,"Клавиатура и тачпад"],
    51 => [1,"Цифровое поле (Numpad)","Numpad_C"], 
    52 => [1,"Подсветка клавиатуры","keyboard_illumination_C"], 
    53 => [1,"Заводская «кириллица» на клавишах","factory_cyrillic_C"], 
    54 => [1,"Тачпад (сенсорная площадка)","touch_pad_C"], 
    
    //Функции

    55 => [2,"Функции"],
    56 => [1,"Функции защиты приватности","privacy_protection_C"],

    //Интерфейсы

    57 => [2,"Интерфейсы"],
    58 => [1,"NFC","NFC_C"],
    59 => [1,"Bluetooth","Bluetooth_C"],
    60 => [1,"LAN","LAN_C"],
    61 => [1,"VGA","VGA_C"],
    62 => [1,"HDMI","HDMI_C"],
    63 => [1,"Аудио выход","Audio_outputs_C"],
    64 => [0,"Количество USB-портов","countusb"],

    //Аккумулятор и время работы

    65 => [2,"Аккумулятор и время работы"],
    66 => [0,"Количество ячеек аккумулятора","accumulatorcount"],
    67 => [0,"Запас энергии","accumulatortank","","Вт ч"],
    68 => [0,"Время работы","accumulatorenergyreserve","","ч"],

    //Комплектация

    69 => [2,"Комплектация"],
    70 => [0,"Операционная система","operatingsystemlaptop"],

    ];
  $mat_property =  [

   //Характеристики коврика
    0 => [2,"Характеристики коврика"],
    1 => [0,"Бренд","brandmat"],
    2 => [0,"Дата выхода","datemat"],// Обычное 0
    3 => [0,"Тип","typemat"],
    4 => [0,"Совместимость","compatibilitymat"], 
    5 => [0,"Материал поверхности","materialsurface"], 
    6 => [0,"Цвет","colormat"], 
    7 => [1,"Подушечка под запястье","pillow_C"],
    8 => [1,"Бортик","skirting_C"],
    9 => [1,"Крепление для кабеля"," binding_C"],

    //Функциональные особенности
    10 => [2,"Функциональные особенности"],
    11 => [1,"Подсветка","illumination_C"],
    12 => [1,"USB-порт","usb_C"],
    13 => [1,"Беспроводная зарядка","exercise_C"],

    //Размеры коврика
    14 => [2,"Размеры коврика"],
    15 => [0,"Глубина","deep","","мм"],
    16 => [0,"Ширина","weight","","мм"],
    17 => [0,"Толщина ","height","","мм"],
    18 => [0,"Вес","massa","","г"],

    ];
  $kaybord_property =  [
     //Общая информация
     0 => [2,"Общая информация"],
     1 => [0,"Дата выхода","dateoutkeyboard"],

     //Основные
     2 => [2,"Основные"],
     3 => [0,"Бренд","brandkeyboard"],
     4 => [0,"Тип","typekeyboard"],
     5 => [0,"Назначение","appointmentkeyboard"],
     6 => [0,"Цвет","colorkeyboard"],
     7 => [0,"Подключение","connectionkeyboard"],

     //Характеристики клавиатуры
     8 => [2,"Характеристики клавиатуры"],
     9 => [0,"Длина провода","wire_length","","м"],
     10 => [0,"Радиус действия","range","","м"],
     11 => [0,"Материал","materialsurfacekeyboard"],
     12 => [0,"Форма клавиш","shapekeyskeyboard"],
     13 => [1,"Подсветка клавиш","illumination_C"],
     14 => [1,"Влагозащита","protection_C"],
     15 => [1,"USB-порт (для подключения периферии)","usb_port_C"],
     16 => [0,"Тип переключателя","typeswitcheskeyboard"],
     17 => [0,"Количество дополнительных кнопок","additional_button"],
     18 => [0,"Время работы","operating_time","","ч"],
     19 => [1,"Сенсорная панель","touchpad_C"],
     20 => [1,"Оплетка кабеля","cable_braid_C"],
     21 => [1,"Аудиовход","audio_input_C"],
     22 => [1,"Аудиовыход","audio_out_C"],
     23 => [0,"Тип аккумулятора","typebatterykeyboard"],
    
     //Размеры и вес клавиатуры
     24 => [2,"Размеры и вес клавиатуры"],
     25 => [0,"Глубина","depth","","мм"],
     26 => [0,"Ширина","weight","","мм"],
     27 => [0,"Толщина","height","","мм"],
     28 => [0,"Вес","massa","","кг"],

    ];
  $headphones_property = [

    //Общая информация
    0 => [2,"Общая информация"],
    1 => [0,"Дата выхода","dateheadphones"],
    2 => [0,"Бренд","brandheadphones"],
    3 => [0,"Назначение","appointmentheadphones"],

    //Основные
    4 => [2,"Основные"],
    5 => [0,"Тип","typeheadphones"],
    6 => [0,"Конструкция","designheadphones"],
    7 => [0,"Акустическое оформление","acousticdesignheadphones"],
    8 => [1,"Беспроводной интерфейс","wireless_C"],
    9 => [0,"Тип беспроводного интерфейса","typewirelessinterfaceheadpones"],
    10 => [0,"Тип беспроводных наушников","typewirellesheadphones"],
    11 => [1,"Пыле-, влаго-, ударопрочность","dust_C"],
    12 => [0,"Материал корпуса","bodymaterialheadphones"],
    13 => [0,"Цвет","colorheadphones"],
    14 => [0,"Вес","massa","","г"],
    
    //Особенности конструкции
    15 => [2,"Особенности конструкции"],
    16 => [0,"Крепление","bindingheadphones"],
    17 => [0,"Складная конструкция","foldabledesignheadphones"],
    18 => [0,"Материал амбушюр","materialearpadsheadphones"],
    19 => [1,"Объёмное звучание","surround_sound_C"],
    20 => [1,"Активное шумоподавление","active_noise_reduction_C"],
    21 => [1,"Пульт управления","wired_remote_C"],
    22 => [0,"Конструкция микрофона","microphonedesignheadphones"],
    23 => [0,"Радиус действия","range_wireless","","м"],

    //Кабель
    24 => [2,"Кабель"],
    25 => [0,"Длина кабеля","cable_length","","м"],
    26 => [0,"Подключение кабеля","cableconnectionheadphones"],
    27 => [0,"Форма штекера","shapeplugheadphones"],
    28 => [0,"Штекер","plugheadphones","","мм"],

    //Технические характеристики
    29 => [2,"Технические характеристики"],
    30 => [0,"Тип излучателя","emittertypeheadphones"],
    31 => [0,"Нижняя граница част. диапазона","lower_border_partial_range","","Гц"],
    32 => [0,"Верхняя граница част. диапазона","lower_border_partial_range","","кГц"],
    33 => [0,"Чувствительность","sensitivity","","дБ/мВт"], 
    34 => [0,"Количество арматурных излучателей","number_reinforcing_emitters"],
    35 => [0,"Диаметр излучателя","diameter_emitter","","мм"], 

    //Технические характеристики микрофона
    36 => [2,"Технические характеристики микрофона"],
    37 => [0,"Импеданс","impedance","","Ом"],
    38 => [1,"Шумоподавление","noise_reduction_C"],

    //Функциональность
    39 => [2,"Функциональность"],
    40 => [1,"Встроенный плеер","built_in_player_C"],
    41 => [1,"Виброотклик","vibration_response_C"],
    42 => [1,"Подсветка","illumination_C"],

    //Интерфейсы
    43 => [2,"Интерфейсы"],
    44 => [1,"NFC","nfc_C"],
    45 => [1,"Bluetooth","bluetooth"],

    //Аккумулятор и время работы
    46 => [2,"Аккумулятор и время работы"],
    47 => [0,"Емкость аккумулятора","battery_capacity","","мАч"],
    48 => [0,"Время работы от аккумулятора","battery_life","","ч"],

    //Комплектация
    49 => [2,"Комплектация"],
    50 => [0,"Комплектация","pickingheadphones"],
    51 => [1,"Амбушюры в комплекте","ear_pads_included"],

    ];

  $muse_property = [
    //Основные
    0 => [2,"Основные"],
    1 => [0,"Бренд","brandmouse"],
    2 => [0,"Дата выхода","dateoutmouse"],
    3 => [0,"Тип","typemouse"],
    4 => [0,"Назначение","appointmentmouse"],
    5 => [0,"Размер","sizemouse"],
    6 => [0,"Подключение","connectionmouse"],
    7 => [0,"Тип сенсора","sensortype"],
    8 => [0,"Модель сенсора","sensormodel"],
    9 => [0,"Разрешение сенсора","sensor_mouse.resolution_dpi","","dpi"],
    10 => [0,"Частота опроса","sensor_mouse.polling_frequency","","Гц"],
    11 => [1,"Изменяемое разрешение","cha_resolution_C"],
    12 => [0,"Материал","material_mouse"],
    13 => [1,"Подсветка","backlight_C"],
    14 => [0,"Цвет","colormouse"],
    15 => [0,"Количество кнопок","count_buttons"],
    16 => [1,"Сменные панели","inter_panels_C"],
    17 => [0,"Колесо прокрутки","scrollwheelmouse"],
    18 => [0,"Время отклика","response_time","","мс"],
    19 => [1,"Грузы","cargo_C"],
    20 => [1,"Оплетка провода","wire_braid_C"],
    21 => [1,"Тихий клик","silent_click_C"],    

    //Технические характеристики
    22 => [2,"Технические характеристики"],
    23 => [0,"Длина провода","wire_length","","м"],
    24 => [0,"Радиус действия","range","","м"],
    25 => [0,"Встроенная память","internal_memory","","МБ"],
    26 => [0,"Тип элементов питания","typebatterymouse"],
    27 => [0,"Тип аккумулятора","batterytypemouse"],
    28 => [0,"Время работы","working_time","","ч"],
    29 => [1,"Индикатор заряда батареи","charge_indicator_C"],
    30 => [1,"Зарядное устройство в комплекте","charge_included_C"],
    31 => [1,"Зарядка от USB","charge_from_USB_C"],
    32 => [1,"Беспроводная зарядка","wireless_charger_C"],

    //Размеры и вес мыши
    33 => [2,"Размеры и вес мыши"],
    34 => [0,"Длина","length","","см"],
    35 => [0,"Ширина","weight","","см"],
    36 => [0,"Высота","height","","см"],
    37 => [0,"Вес","massa","","г"],
    ];


  

  function get_property($id){
    global $leptop_property;
    global $mat_property;
    global $headphones_property;
    global $kaybord_property;
    global $muse_property;
    if($id == 2) return $leptop_property;
    else if($id == 1) return $mat_property;
    else if($id == 4) return $headphones_property;
    else if($id == 3) return $muse_property;
    else if($id == 5) return $kaybord_property;
  }
  function get_sort_params($id){
    global $leptop_sort_params;
    global $mat_sort_params;
    global $muse_sort_params;
    global $headphones_sort_params;
    global $keybord_sort_params;
    if($id == 2) return $leptop_sort_params;
    else if($id == 1) return $mat_sort_params;
    else if($id == 3) return $muse_sort_params;
    else if($id == 4) return $headphones_sort_params;
    else if($id == 5) return $keybord_sort_params;
  }
?>