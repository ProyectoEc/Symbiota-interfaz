<?php
/*
------------------
Language: English
------------------
*/
$LANG['HOME'] = 'Home';
$LANG['SPECIMEN'] = 'Specimen Loader';
$LANG['DATA'] = 'Data Upload Module';
$LANG['FINAL'] = 'Final transfer';
$LANG['RECORD'] = 'Record Start:';
$LANG['RECORD_LIMIT'] = 'Record Limit:';
$LANG['MATCH'] = 'Match on Catalog Number';
$LANG['MATCH_ON'] = 'Match on Other Catalog Numbers';
$LANG['IF'] = 'If both checkboxes are selected, matches will first be made on catalog numbers and secondarily on other catalog numbers';
$LANG['IDENTY'] = ' Identify Data Source';
$LANG['DISPLAY'] = 'Display Additional Options';
$LANG['SOURCE'] = 'Source Unique Identifier / Primary Key';
$LANG['REQUIRED'] = 'required';
$LANG['IMPORT'] = 'Import Occurrence Records';
$LANG['VIW'] = 'view mapping';
$LANG['UNVERIFIED'] = '* Unverified mappings are displayed in yellow';
$LANG['IMPORT_1'] = 'Import Identification History';
$LANG['UNVERIFIED_MAPPING'] = '* Unverified mappings are displayed in yellow';
$LANG['IMPORT_IMAGES'] = 'Import Images';
$LANG['ARE_DISPLAY'] = '* Unverified mappings are displayed in yellow';
$LANG['MATCH_ON'] = 'Match on Catalog Number';
$LANG['MATCH_ON_OTHER'] = 'Match on Other Catalog Numbers';
$LANG['IF_BOTH'] = 'If both checkboxes are selected, matches will first be made on catalog numbers and secondarily on other catalog numbers';
$LANG['VERIFY'] = 'Verify image links';
$LANG['PROCESSING'] = 'Processing Status:';
$LANG['LEAVE'] = 'Leave as is / No Explicit Setting';
$LANG['NOTES'] = 'Notes from Nature File Import';
$LANG['PRES_STATUS'] = 'Processing Status:';
$LANG['LEAVE_AS'] = 'Leave as is / No Explicit Setting';
$LANG['SOURCE'] = 'Source Unique Identifier / Primary Key';
$LANG['REQUIRED_2'] = 'required';
$LANG['SELEC_SOURCE'] = 'Select Source Primary Key';
$LANG['ARE_DISPLAY'] = '* Unverified mappings are displayed in yellow';
$LANG['TO_LEARN'] = '* To learn more about mapping to Symbiota fields (and Darwin Core):';
$LANG['LOADING'] = 'Loading Data into Symbiota';
$LANG['NEW_PROFILE'] = 'New profile title:';
$LANG['MATCH_ON'] = 'Match on Catalog Number';
$LANG['MATCH_OTHER'] = 'Match on Other Catalog Numbers';
$LANG['IF_BOTH_CHECK'] = 'If both checkboxes are selected, matches will first be made on catalog numbers and secondarily on other catalog numbers';
$LANG['VERIFY'] = 'Verify image links from associatedMedia field';
$LANG['PRO'] = 'Processing Status:';
$LANG['LEAVE_AS_IS'] = 'Leave as is / No Explicit Setting';
$LANG['SKELETAL'] = 'Skeletal Files consist of stub data that is easy to capture in bulk during the imaging process.
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

$LANG['SPECIMEN_UPLOADER'] = 'Specimen Uploader';
$LANG['FILE_PATH_IS_EMPTY_PLEASE_SELECT'] = 'File path is empty. Please select the file that is to be loaded.';
$LANG['FILE_MUST_BE_COMMA_SEPARATED'] = 'File must be comma separated (.csv), tab delimited (.txt or .tab), ZIP file (.zip), or a URL to an IPT Resource';
$LANG['IMPORT_FILE'] = 'Import file';
$LANG['IS_LARGER_THAN_IS_ALLOWED'] = 'is larger than is allowed (current limit';
$LANG['NOTE_THAT_IMPORT_FILE_SIZE'] = 'Note that import file size can be reduced by compressing within a zip file.';
$LANG['DUPLICATE_FIELD'] = 'duplicate field';
$LANG['ERROR_SOURCE_FIELD_NAMES'] = 'ERROR: Source field names must be unique';
$LANG['IDENTIFICATION'] = 'Identification';
$LANG['IMAGE'] = 'Image';
$LANG['ERROR_CANT_MAP_TO_THE_SAME'] = 'ERROR: Cant map to the same target field more than once';
$LANG['ERROR_CATALOG_NUMBER_IS_REQUIRED'] = 'ERROR: Catalog Number is required for Skeletal File Uploads';
$LANG['DOES_THE_FIRST_ROW_OF_THE_INPUT_FILE'] = 'Does the first row of the input file contain the column names? It appears that you may be mapping directly to the first row of active data rather than a header row. If so, the first row of data will be lost and some columns might be skipped. Select OK to proceed, or cancel to abort';
$LANG['ENTER_A_PROFILE_NAME_AND_CLICK_THE_SAVE'] = 'Enter a profile name and click the Save Map button to create a new Upload Profile';
$LANG['TRANSFER_RECORDS_TO_CENTRAL_OCCURRENCE_TABLE'] = 'Transfer Records to Central Occurrence Table';
$LANG['START_UPLOAD'] = 'Start Upload';
$LANG['ANALYZE_FILE'] = 'Analyze File';
$LANG['UNPROCESSED'] = 'Unprocessed';
$LANG['STAGE'] = 'Stage';
$LANG['PENDING_REVIEW'] = 'Pending Review';
$LANG['EXPERT_REQUIRED'] = 'Expert Required';
$LANG['PENDING_REVIEW_NFN'] = 'Pending Review-NfN';
$LANG['REVIEWED'] = 'Reviewed';
$LANG['CLOSED'] = 'Closed';
$LANG['RESET_FIELD_MAPPING'] = 'Reset Field Mapping';
$LANG['SAVE_MAPPING'] = 'Save Mapping';

?>