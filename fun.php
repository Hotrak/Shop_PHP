<?php
require_once "dbConection.php";

function getGootsShort($type_id,$sort = "",$order = ""){//,$sort
  $query ="";
  // $order = " order by mat.cost desc";
  if ($type_id == 1) $query = getMatShort(). $sort. $order;
  else if ($type_id == 4) $query = getHeadPhonesShort(). $sort. $order;
  else if ($type_id == 2) $query = getLapTopsShort(). $sort. $order;
  else if ($type_id == 3) $query = getMouseShort(). $sort. $order;
  else if ($type_id == 5) $query = getKeyBordShort(). $sort. $order;
  return mysqli_query(Conn(), $query);
}

function getMatShort(){

  $query = "SELECT
    mat.id_mat as id, 
    mat.name, 
    mat.cost,
    mat.id_typetech,
    mat.id_type,
    mat.count,
    mat.img
    FROM mat";

    return $query;
}
function getHeadPhonesShort(){

  $query = "SELECT 
    headphones.id_headphones as id,
    headphones.name,
    headphones.id_typetech,
    headphones.count,
    headphones.id_typeheadphones,
    headphones.cost,
    headphones.img
    FROM headphones";

    return $query;
}
function getLapTopsShort(){

  $query = "SELECT
    laptop.id_laptop as id,
    laptop.id_typetech,
    laptop.cost,
    laptop.name,
    laptop.id_type_laptope,
    laptop.img,
    laptop.count
    FROM laptop";

    return $query;
}
function getMouseShort(){

  $query = "SELECT
  mouse.id_mouse as id,
  mouse.name,
  mouse.id_typetech,
  mouse.count,
  mouse.id_type_mouse,
  mouse.cost,
  mouse.img
FROM laptopzone.mouse";

    return $query;
}
function getKeyBordShort(){

  $query = "SELECT
  keyboard.id_keyboard as id,
  keyboard.name,
  keyboard.cost,
  keyboard.id_typetech,
  keyboard.id_type_keyboard,
  keyboard.count,
  keyboard.img
FROM keyboard";

    return $query;
}

function getResult($query){

  return mysqli_query(Conn(), $query);
}

function getProduct($id,$type_id){

  $query="";
  if ($type_id == 1) $query = getMatShort(); else
  if ($type_id == 4) $query = getHeadPhonesShort(); else
  if ($type_id == 2) $query = getLapTopsShort(); else
  if ($type_id == 3) $query = getMouseShort(); else
  if ($type_id == 5) $query = getKeyBordShort();

  $temp = preg_split('[,]',$query);
  $id_name = str_replace("SELECT","",$temp[0]);
  $id_name = str_replace("as id","",$id_name);
  
  $query= $query.' WHERE '.$id_name.' = '.$id;
  //var_dump($query);
  return mysqli_fetch_array(mysqli_query(Conn(), $query));
}
function get_good($id,$type){
  if ($type == 1) return select_q("SELECT
        id_mat,
        mat.name as namemat,
        deep,
        weight,
        height,
        massa,
        pillow_C,
        skirting_C,
        binding_C,
        illumination_C,
        exercise_C,
        usb_C,
        type_mat.name as typemat,
        date_out.name as datemat,
        compatibility_mat.name as compatibilitymat,
        material_surface.name as materialsurface,
        type_tech.type as typetechmat,
        color.name as colormat,
        brand_mat.name as brandmat,
        installment,
        loan,
        discount,
        cost,
        img,
        count,
        watching

      FROM mat

        INNER JOIN compatibility_mat
          ON compatibility_mat.id_compatibility_mat = mat.id_compatibility

        INNER JOIN material_surface
          ON material_surface.id_material_surface = mat.id_material

        INNER JOIN color
          ON color.id_color = mat.id_color

        INNER JOIN brand_mat
          ON brand_mat.id_brand_mat = mat.id_brand

        INNER JOIN type_tech
          ON type_tech.id_type = mat.id_typetech

          INNER JOIN date_out
          ON mat.id_date = date_out.id_date

          INNER JOIN type_mat
          ON type_mat.id_type_mat = mat.id_type
          WHERE id_mat = ".$id);
  if ($type == 2) return select_q("SELECT
      laptop.name as product_name,
      laptop.cost,
      laptop.img,
      id_laptop,
      HDD,
      SSD,
      discrete_graphicss_C,
      optical_drive_C,
      camera_C,
      internal_speaker_C,
      Numpad_C,
      keyboard_illumination_C,
      factory_cyrillic_C,
      touch_pad_C,
      privacy_protection_C,
      NFC_C,
      Bluetooth_C,
      LAN_C,
      VGA_C,
      HDMI_C,
      Audio_outputs_C,
      housing_illumination_C,
      protected_housing_C,
      microphone_C,
      width,
      depth,
      thickness,
      massa,
      loan,
      installment,
      discount,
      laptop.count,
      laptop.watching,
      brand_laptop.name as brandlaptop,
      type_laptop.name as typelaptop,
      appointment_laptop.name as appointmentlaptop,
      product_line_laptop.name as productlinelaptop,
      sceen_deagonal.name as sceendeagonal,
      screen_permission.name as screenpermission,
      screen_frequency.name as screenfrequency,
      screen_technology.name as screentechnology,
      screen_surface.name as screensurface,
      screen_laptop.touch_screen_C,
      screen_laptop.pen_input_C,
      processor_platforma.name as processorplatforma,
      processor_name.name as processorname,
      processor_cores.name as processorcores,
      processor_model.name as processormodel,
      processor_laptop.clock_frequency,
      processor_laptop.turbo_frequency,
      processor_laptop.energy_consumption,
      videocard_model.name as videocardmodel,
      videocard_memory.name as videocardmemory,
      ram_type.name as ramtype,
      ram_frequency.name as ramfrequency,
      ram_amount_memory.name as ramamountmemory,
      ram_max_memory.name as rammaxmemory,
      ram_total_memory.name as ramtotalmemory,
      material_laptop.name as materiallaptop,
      color.name as color,
      operating_system_laptop.name as operatingsystemlaptop,
      accumulator_count.name as accumulatorcount,
      accumulator_tank.name as accumulatortank,
      accumulator_energy_reserve.name as accumulatorenergyreserve,
      date_out.name as dateout,
      count_usb.name as countusb
      FROM laptop
      INNER JOIN brand_laptop
      ON laptop.id_brand = brand_laptop.id_brand_laptop
      INNER JOIN type_laptop
      ON type_laptop.id_type_laptop = laptop.id_type_laptope
      INNER JOIN appointment_laptop
      ON appointment_laptop.id_appointment_laptop = laptop.id_appointment
      INNER JOIN product_line_laptop
      ON product_line_laptop.id_product_line_laptop = laptop.id_product_line
      INNER JOIN screen_laptop
      ON screen_laptop.id_screen_laptop = laptop.id_screen
      INNER JOIN sceen_deagonal
      ON sceen_deagonal.id_sceen_deagonal = screen_laptop.id_diagonal
      INNER JOIN screen_permission
      ON screen_permission.id_permission = screen_laptop.id_permission
      INNER JOIN screen_frequency
      ON screen_frequency.id_screen_frequency = screen_laptop.id_frequency
      INNER JOIN screen_technology
      ON screen_technology.id_screen_technology = screen_laptop.id_screen_technology
      INNER JOIN screen_surface
      ON screen_surface.id_screen_surface = screen_laptop.id_surface
      INNER JOIN processor_laptop
      ON processor_laptop.id_processor = laptop.id_processor
      INNER JOIN processor_platforma
      ON processor_platforma.id_processor_platforma = processor_laptop.id_platforma
      INNER JOIN processor_name
      ON processor_name.id_processor_name = processor_laptop.id_name_processor
      INNER JOIN processor_cores
      ON processor_cores.id_processor_cores = processor_laptop.id_number_cores
      INNER JOIN processor_model
      ON processor_model.id_processor_model = processor_laptop.id_model_processor
      INNER JOIN videocard_laptop
      ON videocard_laptop.id_videocard_laptop = laptop.id_videocard
      INNER JOIN videocard_model
      ON videocard_model.id_videocard_model = videocard_laptop.id_model
      INNER JOIN videocard_memory
      ON videocard_memory.id_videocard_memory = videocard_laptop.id_memory
      INNER JOIN ram_laptop
      ON ram_laptop.id_ram = laptop.id_ram
      INNER JOIN ram_type
      ON ram_type.id_ram_type = ram_laptop.id_type
      INNER JOIN ram_frequency
      ON ram_frequency.id_ram_frequency = ram_laptop.id_frequency
      INNER JOIN ram_amount_memory
      ON ram_amount_memory.id_ram_amount_memory = ram_laptop.id_amount_memory
      INNER JOIN ram_max_memory
      ON ram_max_memory.id_ram_max_memory = ram_laptop.id_max_memory
      INNER JOIN material_laptop
      ON material_laptop.id_material = laptop.id_material
      INNER JOIN ram_total_memory
      ON ram_total_memory.id_ram_total_memory = ram_laptop.id_total_memory_slots
      INNER JOIN color
      ON color.id_color = laptop.id_color
      INNER JOIN operating_system_laptop
      ON operating_system_laptop.id_operating_system = laptop.id_operating_system
      INNER JOIN accumulator_laptop
      ON accumulator_laptop.id_accumulator = laptop.id_accumulator
      INNER JOIN accumulator_count
      ON accumulator_count.id_accumulator_count = accumulator_laptop.id_count
      INNER JOIN accumulator_tank
      ON accumulator_tank.id_accumulator_tank = accumulator_laptop.id_tank
      INNER JOIN accumulator_energy_reserve
      ON accumulator_energy_reserve.id_accumulator_energy_reserve = accumulator_laptop.id_energy_reserve
      INNER JOIN type_tech
      ON type_tech.id_type = laptop.id_typetech
      INNER JOIN date_out
      ON date_out.id_date = laptop.id_date
      INNER JOIN count_usb
      ON count_usb.id_count_USB = laptop.id_count_USB
      WHERE laptop.id_laptop = ".$id);
  if ($type == 3) return select_q("SELECT
      mouse.id_mouse,
      mouse.name as name_mouse,
      mouse.count,
      mouse.img as img_mouse,
      mouse.cha_resolution_C,
      mouse.count_buttons,
      mouse.range,
      mouse.wire_length,
      mouse.internal_memory,
      mouse.cargo_C,
      mouse.response_time,
      mouse.wire_braid_C,
      mouse.inter_panels_C,
      mouse.backlight_C,
      mouse.working_time,
      mouse.charge_indicator_C,
      mouse.charge_included_C,
      mouse.charge_from_USB_C,
      mouse.wireless_charger_C,
      mouse.silent_click_C,
      mouse.length,
      mouse.weight,
      mouse.height,
      mouse.massa,
      mouse.loan,
      mouse.installment,
      mouse.discount,
      mouse.cost,
      sensor_mouse.resolution_dpi,
      sensor_mouse.polling_frequency,

      brand_mouse.name as brandmouse,
      type_mouse.name as typemouse,
      appointment_mouse.name as appointmentmouse,
      size_mouse.name as sizemouse,
      connection_mouse.name as connectionmouse,
      scroll_wheel_mouse.name as scrollwheelmouse,
      color.name as colormouse,
      type_battery_mouse.name as typebatterymouse,
      battery_type_mouse.name as batterytypemouse,
      type_tech.type as typetechmouse,
      sensor_type.name as sensortype,
      sensor_model.name as sensormodel,
      material_mouse.name as material_mouse,
      date_out.name as dateoutmouse

    FROM mouse

      LEFT JOIN brand_mouse
        ON brand_mouse.id_brand_mouse = mouse.id_brand

      LEFT JOIN type_mouse
        ON type_mouse.id_type_mouse = mouse.id_type_mouse

      LEFT JOIN appointment_mouse
        ON appointment_mouse.id_appointment_mouse = mouse.id_appointment

      LEFT JOIN size_mouse
        ON size_mouse.id_size_mouse = mouse.id_size

      LEFT JOIN connection_mouse
        ON connection_mouse.id_connection_mouse = mouse.id_connect

      LEFT JOIN sensor_mouse
        ON sensor_mouse.id_sensor_mouse = mouse.id_sensor

      LEFT JOIN scroll_wheel_mouse
        ON scroll_wheel_mouse.id_scroll_wheel_mouse = mouse.id_scroll_wheel

      LEFT JOIN color
        ON color.id_color = mouse.id_color

      LEFT JOIN type_battery_mouse
        ON type_battery_mouse.id_type_battery_mouse = mouse.id_type_battery

      LEFT JOIN battery_type_mouse
        ON battery_type_mouse.id_battery_type_mouse = mouse.id_battery_type

      LEFT JOIN type_tech
        ON type_tech.id_type = mouse.id_typetech

      LEFT JOIN sensor_type
        ON sensor_type.id_sensor_type = sensor_mouse.id_type

      LEFT JOIN sensor_model
        ON sensor_model.id_sensor_model = sensor_mouse.id_model_sensor

      LEFT JOIN material_mouse
        ON material_mouse.id_material_mouse = mouse.id_material_mouse

        left JOIN date_out
        ON date_out.id_date = mouse.id_date 
        WHERE mouse.id_mouse = ".$id); 
  if ($type == 4) return select_q("SELECT
      headphones.id_headphones,
      headphones.name,
      headphones.cost,
      headphones.img,
      headphones.wireless_C,
      headphones.active_noise_reduction_C,
      headphones.built_in_player_C,
      headphones.dust_C,
      headphones.cable_length,
      headphones.number_reinforcing_emitters,
      headphones.diameter_emitter,
      headphones.impedance,
      headphones.lower_border_partial_range,
      headphones.upper_bound_chast_range,
      headphones.sensitivity,
      headphones.surround_sound_C,
      headphones.wired_remote_C,
      headphones.vibration_response_C,
      headphones.nfc_C,
      headphones.illumination_C,
      headphones.bluetooth,
      headphones.range_wireless,
      headphones.battery_capacity,
      headphones.battery_life,
      headphones.ear_pads_included,
      headphones.massa,
      headphones.count,
      headphones.id_date,
      headphones.watching,
      headphones.loan,
      headphones.installment,
      headphones.discount,
      headphones.noise_reduction_C,

      brand_headphones.name as brandheadphones,
      type_headphones.name as typeheadphones,
      design_headphones.name as designheadphones,
      type_wirelles_headphones.name as typewirellesheadphones,
      appointment_headphones.name as appointmentheadphones,
      acoustic_design_headphones.name as acousticdesignheadphones,
      binding_headphones.name as bindingheadphones,
      plug_headphones.name as plugheadphones,
      emitter_type_headphones.name as emittertypeheadphones,
      picking_headphones.name as pickingheadphones,
      foldable_design_headphones.name as foldabledesignheadphones,
      material_ear_pads_headphones.name as materialearpadsheadphones,
      body_material_headphones.name as bodymaterialheadphones,
      cable_connection_headphones.name as cableconnectionheadphones,
      shape_plug_headphones.name as shapeplugheadphones,
      microphone_design_headphones.name as microphonedesignheadphones,
      type_wireless_interface_headpones.name as typewirelessinterfaceheadpones,
      color.name as colorheadphones,
      date_out.name as dateheadphones,
      type_tech.type as typetechheadphones
      
    FROM headphones

      LEFT JOIN brand_headphones
        ON brand_headphones.id_brand_headphones = headphones.id_brand

      LEFT JOIN type_headphones
        ON type_headphones.id_type_headphones = headphones.id_typeheadphones

      LEFT JOIN design_headphones
        ON design_headphones.id_design_headphones = headphones.id_design

      LEFT JOIN type_wirelles_headphones
        ON type_wirelles_headphones.id_type_wirelles = headphones.id_type_wireless

      LEFT JOIN appointment_headphones
        ON appointment_headphones.id_appointment_headphones = headphones.id_appointment

      LEFT JOIN acoustic_design_headphones
        ON acoustic_design_headphones.id_acoustic_design_headphones = headphones.id_acoustic

      LEFT JOIN binding_headphones
        ON binding_headphones.id_binding_headphones = headphones.id_binding

      LEFT JOIN plug_headphones
        ON plug_headphones.id_plug_headphones = headphones.id_plug

      LEFT JOIN emitter_type_headphones
        ON emitter_type_headphones.id_emitter_type_headphones = headphones.id_emitter

      LEFT JOIN picking_headphones
        ON picking_headphones.id_picking_headphones = headphones.id_picking

      LEFT JOIN foldable_design_headphones
        ON foldable_design_headphones.id_foldable_design_headphones = headphones.id_foldable

      LEFT JOIN material_ear_pads_headphones
        ON material_ear_pads_headphones.id_material_ear_pads_headphones = headphones.id_material_ear

      LEFT JOIN body_material_headphones
        ON body_material_headphones.id_body_material_headphones = headphones.id_body_material

      LEFT JOIN cable_connection_headphones
        ON cable_connection_headphones.id_cable_connection_headphones = headphones.id_cable_connection

      LEFT JOIN shape_plug_headphones
        ON shape_plug_headphones.id_shape_plug_headphones = headphones.id_shape_plug

      LEFT JOIN microphone_design_headphones
        ON microphone_design_headphones.id_microphone_design_headphones = headphones.id_microphone

      LEFT JOIN type_wireless_interface_headpones
        ON type_wireless_interface_headpones.id_type_wireless_interface_headpones = headphones.id_type_wireless_inter

      LEFT JOIN color
        ON color.id_color = headphones.id_color

      LEFT JOIN type_tech
        ON type_tech.id_type = headphones.id_typetech

        LEFT JOIN date_out
        ON date_out.id_date = headphones.id_date
        WHERE headphones.id_headphones = ".$id); 
  if ($type == 5) return select_q("SELECT
      keyboard.id_keyboard,
      keyboard.name,
      keyboard.cost,
      keyboard.img,
      illumination_C,
      keyboard.protection_C,
      keyboard.usb_port_C,
      keyboard.additional_button,
      keyboard.operating_time,
      keyboard.range,
      keyboard.wire_length,
      keyboard.touchpad_C,
      keyboard.cable_braid_C,
      keyboard.audio_out_C,
      keyboard.audio_input_C,
      depth,
      weight,
      height,
      keyboard.massa,
      keyboard.loan,
      keyboard.installment,
      keyboard.discount,
      keyboard.count,
      keyboard.watching,

      appointment_keyboard.name as appointmentkeyboard,
      brand_keyboard.name as brandkeyboard,
      connection_keyboard.name as connectionkeyboard,
      material_surface_keyboard.name as materialsurfacekeyboard,
      shape_keys_keyboard.name as shapekeyskeyboard,
      type_keyboard.name as typekeyboard,
      type_switches_keyboard.name as typeswitcheskeyboard,
      color.name as colorkeyboard,
      type_tech.type as typetechkeyboard,
      type_battery_keyboard.name as typebatterykeyboard,
      date_out.name as dateoutkeyboard

      FROM keyboard

      left JOIN appointment_keyboard
        ON appointment_keyboard.id_appointment_keyboard = keyboard.id_appointment

      left JOIN brand_keyboard
        ON brand_keyboard.id_brand_keyboard = keyboard.id_brand

      left JOIN connection_keyboard
        ON connection_keyboard.id_connection_keyboard = keyboard.id_connection

      left JOIN material_surface_keyboard
        ON material_surface_keyboard.id_material_surface_keyboard = keyboard.id_material

      left JOIN shape_keys_keyboard
        ON shape_keys_keyboard.id_shape_keys_keyboard = keyboard.id_shape_keys
      
      left JOIN type_keyboard
      ON type_keyboard.id_type_keyboard = keyboard.id_type_keyboard

      left JOIN type_switches_keyboard
        ON type_switches_keyboard.id_type_switches_keyboard = keyboard.id_switches
      
        left JOIN color
        ON color.id_color = keyboard.id_color

      left JOIN type_tech
        ON type_tech.id_type = keyboard.id_typetech

      left JOIN type_battery_keyboard
        ON type_battery_keyboard.id_type_battery = keyboard.id_type_battery

      Left JOIN date_out
        ON date_out.id_date = keyboard.id_date
        WHERE keyboard.id_keyboard = ".$id); 
}
function select_q($query){
  $mys_qyery = mysqli_query(Conn(), $query);
  if(isset($mys_qyery))
    return mysqli_fetch_array($mys_qyery);
}
function select_q_ones($query){
  $mys_qyery = mysqli_query(Conn(), $query);
  return $mys_qyery;
}

function signIn($login,$password){
    $query = "SELECT password FROM users WHERE login like '".$login."'";
    
    $user =  select_q($query);
    if(isset($user)){
      if(password_verify($password, $user['password'])){
        
        // echo "Acces TRUE <br>";
        return True;
      }
      else{
        // echo "PASSWORD FALSE <br>";
        return False;
      }
    }else{
      // echo "LOGIN FALSE <br>";
      return False;
    }
 }

 function signUp($login,$password){
    $select_query = "SELECT id_user FROM users WHERE login like  '".$login."'";
    $user =  select_q_ones($select_query);
    if(isset($user)){
      // echo "Insert TRUE <br>";
      $hesh_password = password_hash($password,PASSWORD_DEFAULT);
      $insert_query = "INSERT INTO users (login,password) VALUES ('$login','$hesh_password')";
      select_q_ones($insert_query);
      return True;
    }else{
      // echo "LOGIN FALSE <br>";
      return False;
    }
 }
?>

