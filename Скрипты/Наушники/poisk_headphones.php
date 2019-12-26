<?php
$leptop_sort_params = [
        //<!-- Производитель -->

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

    ?>    
];