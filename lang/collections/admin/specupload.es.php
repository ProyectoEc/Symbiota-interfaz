<?php
/*
------------------
Language: ESPAÑOL
------------------
*/
$LANG['HOME'] = 'Inicio';
$LANG['SPECIMEN'] = 'Subida de especímenes';
$LANG['DATA'] = 'Módulo de carga de datos';
$LANG['FINAL'] = 'Transferencia final';
$LANG['RECORD'] = 'Inicio de grabación:';
$LANG['RECORD_LIMIT'] = 'Límite de registro:';
$LANG['MATCH'] = 'Coincidir en número de catálogo';
$LANG['MATCH_ON'] = 'Coincidir con otros números de catálogo';
$LANG['IF'] = 'Si se seleccionan ambas casillas de verificación, primero se harán coincidencias en los números de catálogo y luego en otros números de catálogo';
$LANG['IDENTY'] = ' Identificar fuente de datos';
$LANG['DISPLAY'] = 'Mostrar opciones adicionales';
$LANG['SOURCE'] = 'Fuente de identificación única / clave principal';
$LANG['REQUIRED'] = 'necesario';
$LANG['IMPORT'] = 'Importar registros de ocurrencia';
$LANG['VIW'] = 'ver mapeo';
$LANG['UNVERIFIED'] = '* Las asignaciones no verificadas se muestran en amarillo';
$LANG['IMPORT_1'] = 'Historial de Identificación de Importaciones';
$LANG['UNVERIFIED_MAPPING'] = '* Las asignaciones no verificadas se muestran en amarillo';
$LANG['IMPORT_IMAGES'] = 'Importar Imágenes';
$LANG['ARE_DISPLAY'] = '* Las asignaciones no verificadas se muestran en amarillo';
$LANG['MATCH_ON'] = 'Coincidir en número de catálogo';
$LANG['MATCH_ON_OTHER'] = 'Coincidir con otros números de catálogo';
$LANG['IF_BOTH'] = 'Si se seleccionan ambas casillas de verificación, primero se harán coincidencias en los números de catálogo y luego en otros números de catálogo';
$LANG['VERIFY'] = 'Verificar enlaces de imágenes';
$LANG['PROCESSING'] = 'Estado de procesamiento:';
$LANG['LEAVE'] = 'Deje como está / Sin configuración explícita';
$LANG['NOTES'] = 'Notas de la importación de archivos de la naturaleza';
$LANG['PRES_STATUS'] = 'Estado de procesamiento:';
$LANG['LEAVE_AS'] = 'Deje como está / Sin configuración explícita';
$LANG['SOURCE'] = 'Fuente de identificación única / clave principal';
$LANG['REQUIRED_2'] = 'necesario';
$LANG['SELEC_SOURCE'] = 'Seleccione la Fuente de la Clave Primaria';
$LANG['ARE_DISPLAY'] = '* Las asignaciones no verificadas se muestran en amarillo';
$LANG['TO_LEARN'] = '* Para obtener más información sobre la asignación a los campos de Symbiota (y Darwin Core):';
$LANG['LOADING'] = 'Cargando datos en Symbiota';
$LANG['NEW_PROFILE'] = 'Nuevo título de perfil:';
$LANG['MATCH_ON'] = 'Coincidir en número de catálogo';
$LANG['MATCH_OTHER'] = 'Coincidir con otros números de catálogo';
$LANG['IF_BOTH_CHECK'] = 'Si se seleccionan ambas casillas de verificación, primero se harán coincidencias en los números de catálogo y luego en otros números de catálogo';
$LANG['VERIFY'] = 'Verifique los enlaces de imagen desde el campo Associate Media';
$LANG['PRO'] = 'Estado de procesamiento:';
$LANG['LEAVE_AS_IS'] = 'Deje como está / Sin configuración explícita';
$LANG['SKELETAL'] = 'Los archivos esqueléticos consisten en datos de apéndices que son fáciles de capturar a granel durante el proceso de creación de imágenes.
										This data is used to seed new records to which images are linked.
										Skeletal fields typically collected include filed by or current scientific name, country, state/province, and sometimes county, though any supported field can be included.
										Skeletal file uploads are similar to regular uploads though differ in several ways.';
$LANG['GENERAL'] = 'General file uploads typically consist of full records, while skeletal uploads will almost always be an annotated record with data for only a few selected fields';
$LANG['THE_CATALOG'] = 'The catalog number field is required for skeletal file uploads since this field is used to find matches on images or existing records';
$LANG['IN_CASES'] = 'In cases where a record already exists, a general file upload will completely replace the existing record with the data in the new record.
											On the other hand, a skeletal upload will augment the existing record only with new field data.
											Fields are only added if data does not already exist within the target field.';
$LANG['IF_RECORD'] = 'If a record DOES NOT already exist, a new record will be created in both cases, but only the skeletal record will be tagged as unprocessed';
$LANG['ERROR'] = 'ERROR: Either you have tried to reach this page without going through the collection management menu
				or you have tried to upload a file that is too large.
				You may want to breaking the upload file into smaller files or compressing the file into a zip archive (.zip extension).
				You may want to contact portal administrator to request assistance in uploading the file (hint to admin: increasing PHP upload limits may help,
				current upload_max_filesize =';
$LANG['USE'] = 'Use the back arrows to get back to the file upload page.';

$LANG['SPECIMEN_UPLOADER'] = 'Cargador de muestras';
$LANG['FILE_PATH_IS_EMPTY_PLEASE_SELECT'] = 'La ruta del archivo está vacía. Por favor seleccione el archivo que se va a cargar.';
$LANG['FILE_MUST_BE_COMMA_SEPARATED'] = 'El archivo debe estar separado por comas (.csv), delimitado por tabulaciones (.txt o .tab), archivo ZIP (.zip) o una URL a un recurso de IPT';
$LANG['IMPORT_FILE'] = 'Importar archivo';
$LANG['IS_LARGER_THAN_IS_ALLOWED'] = 'es mayor que el permitido (límite actual';
$LANG['NOTE_THAT_IMPORT_FILE_SIZE'] = 'Tenga en cuenta que el tamaño del archivo de importación se puede reducir al comprimir dentro de un archivo zip.';
$LANG['DUPLICATE_FIELD'] = 'campo duplicado';
$LANG['ERROR_SOURCE_FIELD_NAMES'] = 'ERROR: los nombres de los campos de origen deben ser únicos';
$LANG['IDENTIFICATION'] = 'Identificación';
$LANG['IMAGE'] = 'Imagen';
$LANG['ERROR_CANT_MAP_TO_THE_SAME'] = 'ERROR: no se puede asignar al mismo campo de destino más de una vez';
$LANG['ERROR_CATALOG_NUMBER_IS_REQUIRED'] = 'ERROR: se requiere un número de catálogo para la carga de archivos esqueléticos';
$LANG['DOES_THE_FIRST_ROW_OF_THE_INPUT_FILE'] = '¿La primera fila del archivo de entrada contiene los nombres de columna? Parece que puede estar asignando directamente a la primera fila de datos activos en lugar de una fila de encabezado. Si es así, la primera fila de datos se perderá y algunas columnas podrían omitirse. Seleccione OK para continuar, o cancele para abortar';
$LANG['ENTER_A_PROFILE_NAME_AND_CLICK_THE_SAVE'] = 'Ingrese un nombre de perfil y haga clic en el botón Guardar mapa para crear un nuevo perfil de carga';
$LANG['TRANSFER_RECORDS_TO_CENTRAL_OCCURRENCE_TABLE'] = 'Transferencia de registros a la tabla central de ocurrencias';
$LANG['START_UPLOAD'] = 'Iniciar la subida';
$LANG['ANALYZE_FILE'] = 'Analizar archivo';
$LANG['UNPROCESSED'] = 'Sin procesar';
$LANG['STAGE'] = 'Escenario';
$LANG['PENDING_REVIEW'] = 'Revisión pendiente';
$LANG['EXPERT_REQUIRED'] = 'Experto requerido';
$LANG['PENDING_REVIEW_NFN'] = 'Revisión pendiente-NfN';
$LANG['REVIEWED'] = 'Revisados';
$LANG['CLOSED'] = 'Cerrado';
$LANG['RESET_FIELD_MAPPING'] = 'Restablecer asignación de campo';
$LANG['SAVE_MAPPING'] = 'Guardar mapeo';

?>