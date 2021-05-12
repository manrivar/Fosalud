<?php
App::uses('AppController', 'Controller');
/**
 * Maternalhcxestablishments Controller
 *
 * @property Odonxestablishment $Odonxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class OdonxestablishmentsController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $name = 'Odonxestablishments';
    public $uses = array();
    public $layout = 'default';
    public $components = array('Paginator', 'Session', 'Flash');
    
    /**
     * index method
     *
     * @return void
     */
    public function Autorizacion()
    {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 3) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }
    
    public function index($region, $yer, $layout = 0)
    {
        // ifpara no mostrar el layout en la tabla , implementar en todas las tablas
        if($layout == 1){
            $this->autoLayout = false;
        }
        // metodo para filtrar por fechas
        $yir = $this->request->query('yir');
        $reg = $region;

        $conditions = [];
        if ($yir) {
            $conditions[] = [
                'odonxestablishment.year =' => $yir,
                'odonxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'odonxestablishment.year =' => $yir,
                    'odonxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'odonxestablishment.year =' => $yer,
                    'odonxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Odonxestablishment->recursive = 0;
        $this->set('odonxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Odonxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Odonxestablishment.totpac_january) as totpac_jan, SUM(Odonxestablishment.totpac_february) as totpac_feb, SUM(Odonxestablishment.totpac_march) as totpac_mar, SUM(Odonxestablishment.totpac_april) as totpac_apr, SUM(Odonxestablishment.totpac_may) as totpac_may, SUM(Odonxestablishment.totpac_june) as totpac_jun, SUM(Odonxestablishment.totpac_july) as totpac_jul, SUM(Odonxestablishment.totpac_august) as totpac_aug, SUM(Odonxestablishment.totpac_september) as totpac_sep, SUM(Odonxestablishment.totpac_october) as totpac_oct, SUM(Odonxestablishment.totpac_november) as totpac_nov, SUM(Odonxestablishment.totpac_december) as totpac_decem, SUM(Odonxestablishment.totpro_january) as totpro_jan, SUM(Odonxestablishment.totpro_february) as totpro_feb, SUM(Odonxestablishment.totpro_march) as totpro_mar, SUM(Odonxestablishment.totpro_april) as totpro_apr, SUM(Odonxestablishment.totpro_may) as totpro_may, SUM(Odonxestablishment.totpro_june) as totpro_jun, SUM(Odonxestablishment.totpro_july) as totpro_jul, SUM(Odonxestablishment.totpro_august) as totpro_aug, SUM(Odonxestablishment.totpro_september) as totpro_sep, SUM(Odonxestablishment.totpro_october) as totpro_oct, SUM(Odonxestablishment.totpro_november) as totpro_nov, SUM(Odonxestablishment.totpro_december) as totpro_decem, SUM(Odonxestablishment.rec_january) as rec_jan, SUM(Odonxestablishment.rec_february) as rec_feb, SUM(Odonxestablishment.rec_march) as rec_mar, SUM(Odonxestablishment.rec_april) as rec_apr, SUM(Odonxestablishment.rec_may) as rec_may, SUM(Odonxestablishment.rec_june) as rec_jun, SUM(Odonxestablishment.rec_july) as rec_jul, SUM(Odonxestablishment.rec_august) as rec_aug, SUM(Odonxestablishment.rec_september) as rec_sep, SUM(Odonxestablishment.rec_october) as rec_oct, SUM(Odonxestablishment.rec_november) as rec_nov, SUM(Odonxestablishment.rec_december) as rec_decem, SUM(Odonxestablishment.cha_january) as cha_jan, SUM(Odonxestablishment.cha_february) as cha_feb, SUM(Odonxestablishment.cha_march) as cha_mar, SUM(Odonxestablishment.cha_april) as cha_apr, SUM(Odonxestablishment.cha_may) as cha_may, SUM(Odonxestablishment.cha_june) as cha_jun, SUM(Odonxestablishment.cha_july) as cha_jul, SUM(Odonxestablishment.cha_august) as cha_aug, SUM(Odonxestablishment.cha_september) as cha_sep, SUM(Odonxestablishment.cha_october) as cha_oct, SUM(Odonxestablishment.cha_november) as cha_nov, SUM(Odonxestablishment.cha_december) as cha_decem, SUM(Odonxestablishment.con_january) as con_jan, SUM(Odonxestablishment.con_february) as con_feb, SUM(Odonxestablishment.con_march) as con_mar, SUM(Odonxestablishment.con_april) as con_apr, SUM(Odonxestablishment.con_may) as con_may, SUM(Odonxestablishment.con_june) as con_jun, SUM(Odonxestablishment.con_july) as con_jul, SUM(Odonxestablishment.con_august) as con_aug, SUM(Odonxestablishment.con_september) as con_sep, SUM(Odonxestablishment.con_october) as con_oct, SUM(Odonxestablishment.con_november) as con_nov, SUM(Odonxestablishment.con_december) as con_decem'),
                    'conditions' => array(
                        'Odonxestablishment.year =' => $yir,
                        'Odonxestablishment.regions_id' => $reg
                    )
                )
            );

            $mostrar_total_jan1 = $months[0][0]['totpac_jan'];
            $mostrar_total_jan2 = $months[0][0]['totpro_jan'];
            $mostrar_total_jan3 = $months[0][0]['rec_jan'];
            $mostrar_total_jan4 = $months[0][0]['cha_jan'];
            $mostrar_total_jan5 = $months[0][0]['con_jan'];
            
            
            $mostrar_total_feb1 = $months[0][0]['totpac_feb'];
            $mostrar_total_feb2 = $months[0][0]['totpro_feb'];
            $mostrar_total_feb3 = $months[0][0]['rec_feb'];
            $mostrar_total_feb4 = $months[0][0]['cha_feb'];
            $mostrar_total_feb5 = $months[0][0]['con_feb'];
            
            
            $mostrar_total_mar1 = $months[0][0]['totpac_mar'];
            $mostrar_total_mar2 = $months[0][0]['totpro_mar'];
            $mostrar_total_mar3 = $months[0][0]['rec_mar'];
            $mostrar_total_mar4 = $months[0][0]['cha_mar'];
            $mostrar_total_mar5 = $months[0][0]['con_mar'];
            
            
            $mostrar_total_apr1 = $months[0][0]['totpac_apr'];
            $mostrar_total_apr2 = $months[0][0]['totpro_apr'];
            $mostrar_total_apr3 = $months[0][0]['rec_apr'];
            $mostrar_total_apr4 = $months[0][0]['cha_apr'];
            $mostrar_total_apr5 = $months[0][0]['con_apr'];
            
            
            $mostrar_total_may1 = $months[0][0]['totpac_may'];
            $mostrar_total_may2 = $months[0][0]['totpro_may'];
            $mostrar_total_may3 = $months[0][0]['rec_may'];
            $mostrar_total_may4 = $months[0][0]['cha_may'];
            $mostrar_total_may5 = $months[0][0]['con_may'];
            
            
            $mostrar_total_jun1 = $months[0][0]['totpac_jun'];
            $mostrar_total_jun2 = $months[0][0]['totpro_jun'];
            $mostrar_total_jun3 = $months[0][0]['rec_jun'];
            $mostrar_total_jun4 = $months[0][0]['cha_jun'];
            $mostrar_total_jun5 = $months[0][0]['con_jun'];
            
            
            $mostrar_total_jul1 = $months[0][0]['totpac_jul'];
            $mostrar_total_jul2 = $months[0][0]['totpro_jul'];
            $mostrar_total_jul3 = $months[0][0]['rec_jul'];
            $mostrar_total_jul4 = $months[0][0]['cha_jul'];
            $mostrar_total_jul5 = $months[0][0]['con_jul'];
            
            
            $mostrar_total_aug1 = $months[0][0]['totpac_aug'];
            $mostrar_total_aug2 = $months[0][0]['totpro_aug'];
            $mostrar_total_aug3 = $months[0][0]['rec_aug'];
            $mostrar_total_aug4 = $months[0][0]['cha_aug'];
            $mostrar_total_aug5 = $months[0][0]['con_aug'];
            
            
            $mostrar_total_sep1 = $months[0][0]['totpac_sep'];
            $mostrar_total_sep2 = $months[0][0]['totpro_sep'];
            $mostrar_total_sep3 = $months[0][0]['rec_sep'];
            $mostrar_total_sep4 = $months[0][0]['cha_sep'];
            $mostrar_total_sep5 = $months[0][0]['con_sep'];
            
            
            $mostrar_total_oct1 = $months[0][0]['totpac_oct'];
            $mostrar_total_oct2 = $months[0][0]['totpro_oct'];
            $mostrar_total_oct3 = $months[0][0]['rec_oct'];
            $mostrar_total_oct4 = $months[0][0]['cha_oct'];
            $mostrar_total_oct5 = $months[0][0]['con_oct'];
            
            
            $mostrar_total_nov1 = $months[0][0]['totpac_nov'];
            $mostrar_total_nov2 = $months[0][0]['totpro_nov'];
            $mostrar_total_nov3 = $months[0][0]['rec_nov'];
            $mostrar_total_nov4 = $months[0][0]['cha_nov'];
            $mostrar_total_nov5 = $months[0][0]['con_nov'];
            
            
            $mostrar_total_dec1 = $months[0][0]['totpac_decem'];
            $mostrar_total_dec2 = $months[0][0]['totpro_decem'];
            $mostrar_total_dec3 = $months[0][0]['rec_decem'];
            $mostrar_total_dec4 = $months[0][0]['cha_decem'];
            $mostrar_total_dec5 = $months[0][0]['con_decem'];
            
            
            $this->set(array('totpac_jan' => $mostrar_total_jan1, 'totpac_feb' => $mostrar_total_feb1, 'totpac_mar' => $mostrar_total_mar1, 'totpac_apr' => $mostrar_total_apr1, 'totpac_may' => $mostrar_total_may1, 'totpac_jun' => $mostrar_total_jun1, 'totpac_jul' => $mostrar_total_jul1, 'totpac_aug' => $mostrar_total_aug1, 'totpac_sep' => $mostrar_total_sep1, 'totpac_oct' => $mostrar_total_oct1, 'totpac_nov' => $mostrar_total_nov1, 'totpac_decem' => $mostrar_total_dec1, 'totpro_jan' => $mostrar_total_jan2, 'totpro_feb' => $mostrar_total_feb2, 'totpro_mar' => $mostrar_total_mar2, 'totpro_apr' => $mostrar_total_apr2, 'totpro_may' => $mostrar_total_may2, 'totpro_jun' => $mostrar_total_jun2, 'totpro_jul' => $mostrar_total_jul2, 'totpro_aug' => $mostrar_total_aug2, 'totpro_sep' => $mostrar_total_sep2, 'totpro_oct' => $mostrar_total_oct2, 'totpro_nov' => $mostrar_total_nov2, 'totpro_decem' => $mostrar_total_dec2, 'rec_jan' => $mostrar_total_jan3, 'rec_feb' => $mostrar_total_feb3, 'rec_mar' => $mostrar_total_mar3, 'rec_apr' => $mostrar_total_apr3, 'rec_may' => $mostrar_total_may3, 'rec_jun' => $mostrar_total_jun3, 'rec_jul' => $mostrar_total_jul3, 'rec_aug' => $mostrar_total_aug3, 'rec_sep' => $mostrar_total_sep3, 'rec_oct' => $mostrar_total_oct3, 'rec_nov' => $mostrar_total_nov3, 'rec_decem' => $mostrar_total_dec3, 'cha_jan' => $mostrar_total_jan4, 'cha_feb' => $mostrar_total_feb4, 'cha_mar' => $mostrar_total_mar4, 'cha_apr' => $mostrar_total_apr4, 'cha_may' => $mostrar_total_may4, 'cha_jun' => $mostrar_total_jun4, 'cha_jul' => $mostrar_total_jul4, 'cha_aug' => $mostrar_total_aug4, 'cha_sep' => $mostrar_total_sep4, 'cha_oct' => $mostrar_total_oct4, 'cha_nov' => $mostrar_total_nov4, 'cha_decem' => $mostrar_total_dec4, 'con_jan' => $mostrar_total_jan4, 'con_feb' => $mostrar_total_feb4, 'con_mar' => $mostrar_total_mar4, 'con_apr' => $mostrar_total_apr4, 'con_may' => $mostrar_total_may4, 'con_jun' => $mostrar_total_jun4, 'con_jul' => $mostrar_total_jul4, 'con_aug' => $mostrar_total_aug4, 'con_sep' => $mostrar_total_sep4, 'con_oct' => $mostrar_total_oct4, 'con_nov' => $mostrar_total_nov4, 'con_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['totpac_jan'] + $months[0][0]['totpac_feb'] + $months[0][0]['totpac_mar'] +
                     $months[0][0]['totpro_jan'] + $months[0][0]['totpro_feb'] + $months[0][0]['totpro_mar'] +
                     $months[0][0]['rec_jan'] + $months[0][0]['rec_feb'] + $months[0][0]['rec_mar'] +
                     $months[0][0]['cha_jan'] + $months[0][0]['cha_feb'] + $months[0][0]['cha_mar'] +
                     $months[0][0]['con_jan'] + $months[0][0]['con_feb'] + $months[0][0]['con_mar'];

            $trim2 = $months[0][0]['totpac_apr'] + $months[0][0]['totpac_may'] + $months[0][0]['totpac_jun'] +
                     $months[0][0]['totpro_apr'] + $months[0][0]['totpro_may'] + $months[0][0]['totpro_jun'] + 
                     $months[0][0]['rec_apr'] + $months[0][0]['rec_may'] + $months[0][0]['rec_jun'] +
                     $months[0][0]['cha_apr'] + $months[0][0]['cha_may'] + $months[0][0]['cha_jun'] +
                     $months[0][0]['con_apr'] + $months[0][0]['con_may'] + $months[0][0]['con_jun'];

            $trim3 = $months[0][0]['totpac_jul'] + $months[0][0]['totpac_aug'] + $months[0][0]['totpac_sep'] +
                     $months[0][0]['totpro_jul'] + $months[0][0]['totpro_aug'] + $months[0][0]['totpro_sep'] +
                     $months[0][0]['rec_jul'] + $months[0][0]['rec_aug'] + $months[0][0]['rec_sep'] +
                     $months[0][0]['cha_jul'] + $months[0][0]['cha_aug'] + $months[0][0]['cha_sep'] +
                     $months[0][0]['con_jul'] + $months[0][0]['con_aug'] + $months[0][0]['con_sep'];

            $trim4 = $months[0][0]['totpac_oct'] + $months[0][0]['totpac_nov'] + $months[0][0]['totpac_decem'] + 
                     $months[0][0]['totpro_oct'] + $months[0][0]['totpro_nov'] + $months[0][0]['totpro_decem'] +
                     $months[0][0]['rec_oct'] + $months[0][0]['rec_nov'] + $months[0][0]['rec_decem'] + 
                     $months[0][0]['cha_oct'] + $months[0][0]['cha_nov'] + $months[0][0]['cha_decem'] +
                     $months[0][0]['con_oct'] + $months[0][0]['con_nov'] + $months[0][0]['con_decem'];

            $this->loadModel('Odon');
            $this->Odon->query("UPDATE odons SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE odons.regions_id = $region && odons.year = $yir");
        } else {
            // Talksxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Odonxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Odonxestablishment.totpac_january) as totpac_jan, SUM(Odonxestablishment.totpac_february) as totpac_feb, SUM(Odonxestablishment.totpac_march) as totpac_mar, SUM(Odonxestablishment.totpac_april) as totpac_apr, SUM(Odonxestablishment.totpac_may) as totpac_may, SUM(Odonxestablishment.totpac_june) as totpac_jun, SUM(Odonxestablishment.totpac_july) as totpac_jul, SUM(Odonxestablishment.totpac_august) as totpac_aug, SUM(Odonxestablishment.totpac_september) as totpac_sep, SUM(Odonxestablishment.totpac_october) as totpac_oct, SUM(Odonxestablishment.totpac_november) as totpac_nov, SUM(Odonxestablishment.totpac_december) as totpac_decem, SUM(Odonxestablishment.totpro_january) as totpro_jan, SUM(Odonxestablishment.totpro_february) as totpro_feb, SUM(Odonxestablishment.totpro_march) as totpro_mar, SUM(Odonxestablishment.totpro_april) as totpro_apr, SUM(Odonxestablishment.totpro_may) as totpro_may, SUM(Odonxestablishment.totpro_june) as totpro_jun, SUM(Odonxestablishment.totpro_july) as totpro_jul, SUM(Odonxestablishment.totpro_august) as totpro_aug, SUM(Odonxestablishment.totpro_september) as totpro_sep, SUM(Odonxestablishment.totpro_october) as totpro_oct, SUM(Odonxestablishment.totpro_november) as totpro_nov, SUM(Odonxestablishment.totpro_december) as totpro_decem, SUM(Odonxestablishment.rec_january) as rec_jan, SUM(Odonxestablishment.rec_february) as rec_feb, SUM(Odonxestablishment.rec_march) as rec_mar, SUM(Odonxestablishment.rec_april) as rec_apr, SUM(Odonxestablishment.rec_may) as rec_may, SUM(Odonxestablishment.rec_june) as rec_jun, SUM(Odonxestablishment.rec_july) as rec_jul, SUM(Odonxestablishment.rec_august) as rec_aug, SUM(Odonxestablishment.rec_september) as rec_sep, SUM(Odonxestablishment.rec_october) as rec_oct, SUM(Odonxestablishment.rec_november) as rec_nov, SUM(Odonxestablishment.rec_december) as rec_decem, SUM(Odonxestablishment.cha_january) as cha_jan, SUM(Odonxestablishment.cha_february) as cha_feb, SUM(Odonxestablishment.cha_march) as cha_mar, SUM(Odonxestablishment.cha_april) as cha_apr, SUM(Odonxestablishment.cha_may) as cha_may, SUM(Odonxestablishment.cha_june) as cha_jun, SUM(Odonxestablishment.cha_july) as cha_jul, SUM(Odonxestablishment.cha_august) as cha_aug, SUM(Odonxestablishment.cha_september) as cha_sep, SUM(Odonxestablishment.cha_october) as cha_oct, SUM(Odonxestablishment.cha_november) as cha_nov, SUM(Odonxestablishment.cha_december) as cha_decem, SUM(Odonxestablishment.con_january) as con_jan, SUM(Odonxestablishment.con_february) as con_feb, SUM(Odonxestablishment.con_march) as con_mar, SUM(Odonxestablishment.con_april) as con_apr, SUM(Odonxestablishment.con_may) as con_may, SUM(Odonxestablishment.con_june) as con_jun, SUM(Odonxestablishment.con_july) as con_jul, SUM(Odonxestablishment.con_august) as con_aug, SUM(Odonxestablishment.con_september) as con_sep, SUM(Odonxestablishment.con_october) as con_oct, SUM(Odonxestablishment.con_november) as con_nov, SUM(Odonxestablishment.con_december) as con_decem'),
                    'conditions' => array(
                        'Odonxestablishment.year =' => $yer,
                        'Odonxestablishment.regions_id' => $reg
                    )
                )
            );
                 
            $mostrar_total_jan1 = $months[0][0]['totpac_jan'];
            $mostrar_total_jan2 = $months[0][0]['totpro_jan'];
            $mostrar_total_jan3 = $months[0][0]['rec_jan'];
            $mostrar_total_jan4 = $months[0][0]['cha_jan'];
            $mostrar_total_jan5 = $months[0][0]['con_jan'];
    
            $mostrar_total_feb1 = $months[0][0]['totpac_feb'];
            $mostrar_total_feb2 = $months[0][0]['totpro_feb'];
            $mostrar_total_feb3 = $months[0][0]['rec_feb'];
            $mostrar_total_feb4 = $months[0][0]['cha_feb'];
            $mostrar_total_feb5 = $months[0][0]['con_feb'];
            
            
            $mostrar_total_mar1 = $months[0][0]['totpac_mar'];
            $mostrar_total_mar2 = $months[0][0]['totpro_mar'];
            $mostrar_total_mar3 = $months[0][0]['rec_mar'];
            $mostrar_total_mar4 = $months[0][0]['cha_mar'];
            $mostrar_total_mar5 = $months[0][0]['con_mar'];
            
            
            $mostrar_total_apr1 = $months[0][0]['totpac_apr'];
            $mostrar_total_apr2 = $months[0][0]['totpro_apr'];
            $mostrar_total_apr3 = $months[0][0]['rec_apr'];
            $mostrar_total_apr4 = $months[0][0]['cha_apr'];
            $mostrar_total_apr5 = $months[0][0]['con_apr'];
            
            
            $mostrar_total_may1 = $months[0][0]['totpac_may'];
            $mostrar_total_may2 = $months[0][0]['totpro_may'];
            $mostrar_total_may3 = $months[0][0]['rec_may'];
            $mostrar_total_may4 = $months[0][0]['cha_may'];
            $mostrar_total_may5 = $months[0][0]['con_may'];
            
            
            $mostrar_total_jun1 = $months[0][0]['totpac_jun'];
            $mostrar_total_jun2 = $months[0][0]['totpro_jun'];
            $mostrar_total_jun3 = $months[0][0]['rec_jun'];
            $mostrar_total_jun4 = $months[0][0]['cha_jun'];
            $mostrar_total_jun5 = $months[0][0]['con_jun'];
            
            
            $mostrar_total_jul1 = $months[0][0]['totpac_jul'];
            $mostrar_total_jul2 = $months[0][0]['totpro_jul'];
            $mostrar_total_jul3 = $months[0][0]['rec_jul'];
            $mostrar_total_jul4 = $months[0][0]['cha_jul'];
            $mostrar_total_jul5 = $months[0][0]['con_jul'];
            
            
            $mostrar_total_aug1 = $months[0][0]['totpac_aug'];
            $mostrar_total_aug2 = $months[0][0]['totpro_aug'];
            $mostrar_total_aug3 = $months[0][0]['rec_aug'];
            $mostrar_total_aug4 = $months[0][0]['cha_aug'];
            $mostrar_total_aug5 = $months[0][0]['con_aug'];
            
            
            $mostrar_total_sep1 = $months[0][0]['totpac_sep'];
            $mostrar_total_sep2 = $months[0][0]['totpro_sep'];
            $mostrar_total_sep3 = $months[0][0]['rec_sep'];
            $mostrar_total_sep4 = $months[0][0]['cha_sep'];
            $mostrar_total_sep5 = $months[0][0]['con_sep'];
            
            
            $mostrar_total_oct1 = $months[0][0]['totpac_oct'];
            $mostrar_total_oct2 = $months[0][0]['totpro_oct'];
            $mostrar_total_oct3 = $months[0][0]['rec_oct'];
            $mostrar_total_oct4 = $months[0][0]['cha_oct'];
            $mostrar_total_oct5 = $months[0][0]['con_oct'];
            
            
            $mostrar_total_nov1 = $months[0][0]['totpac_nov'];
            $mostrar_total_nov2 = $months[0][0]['totpro_nov'];
            $mostrar_total_nov3 = $months[0][0]['rec_nov'];
            $mostrar_total_nov4 = $months[0][0]['cha_nov'];
            $mostrar_total_nov5 = $months[0][0]['con_nov'];
            
            
            $mostrar_total_dec1 = $months[0][0]['totpac_decem'];
            $mostrar_total_dec2 = $months[0][0]['totpro_decem'];
            $mostrar_total_dec3 = $months[0][0]['rec_decem'];
            $mostrar_total_dec4 = $months[0][0]['cha_decem'];
            $mostrar_total_dec5 = $months[0][0]['con_decem'];
            

            $asd = $this->Odonxestablishment->find('all', array(
                'fields' => array("Odonxestablishment.totpac_january"),
                'conditions' => array(
                    'Odonxestablishment.year ' => $yir,
                    'Odonxestablishment.regions_id' => $reg
                )
            ));

            $this->set(array('totpac_jan' => $mostrar_total_jan1, 'totpac_feb' => $mostrar_total_feb1, 'totpac_mar' => $mostrar_total_mar1, 'totpac_apr' => $mostrar_total_apr1, 'totpac_may' => $mostrar_total_may1, 'totpac_jun' => $mostrar_total_jun1, 'totpac_jul' => $mostrar_total_jul1, 'totpac_aug' => $mostrar_total_aug1, 'totpac_sep' => $mostrar_total_sep1, 'totpac_oct' => $mostrar_total_oct1, 'totpac_nov' => $mostrar_total_nov1, 'totpac_decem' => $mostrar_total_dec1, 'totpro_jan' => $mostrar_total_jan2, 'totpro_feb' => $mostrar_total_feb2, 'totpro_mar' => $mostrar_total_mar2, 'totpro_apr' => $mostrar_total_apr2, 'totpro_may' => $mostrar_total_may2, 'totpro_jun' => $mostrar_total_jun2, 'totpro_jul' => $mostrar_total_jul2, 'totpro_aug' => $mostrar_total_aug2, 'totpro_sep' => $mostrar_total_sep2, 'totpro_oct' => $mostrar_total_oct2, 'totpro_nov' => $mostrar_total_nov2, 'totpro_decem' => $mostrar_total_dec2, 'rec_jan' => $mostrar_total_jan3, 'rec_feb' => $mostrar_total_feb3, 'rec_mar' => $mostrar_total_mar3, 'rec_apr' => $mostrar_total_apr3, 'rec_may' => $mostrar_total_may3, 'rec_jun' => $mostrar_total_jun3, 'rec_jul' => $mostrar_total_jul3, 'rec_aug' => $mostrar_total_aug3, 'rec_sep' => $mostrar_total_sep3, 'rec_oct' => $mostrar_total_oct3, 'rec_nov' => $mostrar_total_nov3, 'rec_decem' => $mostrar_total_dec3, 'cha_jan' => $mostrar_total_jan4, 'cha_feb' => $mostrar_total_feb4, 'cha_mar' => $mostrar_total_mar4, 'cha_apr' => $mostrar_total_apr4, 'cha_may' => $mostrar_total_may4, 'cha_jun' => $mostrar_total_jun4, 'cha_jul' => $mostrar_total_jul4, 'cha_aug' => $mostrar_total_aug4, 'cha_sep' => $mostrar_total_sep4, 'cha_oct' => $mostrar_total_oct4, 'cha_nov' => $mostrar_total_nov4, 'cha_decem' => $mostrar_total_dec4, 'con_jan' => $mostrar_total_jan4, 'con_feb' => $mostrar_total_feb4, 'con_mar' => $mostrar_total_mar4, 'con_apr' => $mostrar_total_apr4, 'con_may' => $mostrar_total_may4, 'con_jun' => $mostrar_total_jun4, 'con_jul' => $mostrar_total_jul4, 'con_aug' => $mostrar_total_aug4, 'con_sep' => $mostrar_total_sep4, 'con_oct' => $mostrar_total_oct4, 'con_nov' => $mostrar_total_nov4, 'con_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
    $trim1 = $months[0][0]['totpac_jan'] + $months[0][0]['totpac_feb'] + $months[0][0]['totpac_mar'] +
           $months[0][0]['totpro_jan'] + $months[0][0]['totpro_feb'] + $months[0][0]['totpro_mar'] +
           $months[0][0]['rec_jan'] + $months[0][0]['rec_feb'] + $months[0][0]['rec_mar'] +
           $months[0][0]['cha_jan'] + $months[0][0]['cha_feb'] + $months[0][0]['cha_mar'] +
           $months[0][0]['con_jan'] + $months[0][0]['con_feb'] + $months[0][0]['con_mar'];

    $trim2 = $months[0][0]['totpac_apr'] + $months[0][0]['totpac_may'] + $months[0][0]['totpac_jun'] +
           $months[0][0]['totpro_apr'] + $months[0][0]['totpro_may'] + $months[0][0]['totpro_jun'] + 
           $months[0][0]['rec_apr'] + $months[0][0]['rec_may'] + $months[0][0]['rec_jun'] +
           $months[0][0]['cha_apr'] + $months[0][0]['cha_may'] + $months[0][0]['cha_jun'] +
           $months[0][0]['con_apr'] + $months[0][0]['con_may'] + $months[0][0]['con_jun'];

    $trim3 = $months[0][0]['totpac_jul'] + $months[0][0]['totpac_aug'] + $months[0][0]['totpac_sep'] +
           $months[0][0]['totpro_jul'] + $months[0][0]['totpro_aug'] + $months[0][0]['totpro_sep'] +
           $months[0][0]['rec_jul'] + $months[0][0]['rec_aug'] + $months[0][0]['rec_sep'] +
           $months[0][0]['cha_jul'] + $months[0][0]['cha_aug'] + $months[0][0]['cha_sep'] +
           $months[0][0]['con_jul'] + $months[0][0]['con_aug'] + $months[0][0]['con_sep'];

    $trim4 = $months[0][0]['totpac_oct'] + $months[0][0]['totpac_nov'] + $months[0][0]['totpac_decem'] + 
           $months[0][0]['totpro_oct'] + $months[0][0]['totpro_nov'] + $months[0][0]['totpro_decem'] +
           $months[0][0]['rec_oct'] + $months[0][0]['rec_nov'] + $months[0][0]['rec_decem'] + 
           $months[0][0]['cha_oct'] + $months[0][0]['cha_nov'] + $months[0][0]['cha_decem'] +
           $months[0][0]['con_oct'] + $months[0][0]['con_nov'] + $months[0][0]['con_decem'];

            $this->loadModel('Odon');
            $up = $this->Odon->query("UPDATE odons SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE odons.regions_id = $region && odons.year = $yer");
            
           
            
        }
    }
     /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Talksxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        $options = array('conditions' => array('Talksxestablishment.' . $this->Talksxestablishment->primaryKey => $id));
        $this->set('talksxestablishment', $this->Talksxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Talksxestablishment->create();
            if ($this->Talksxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The talksxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The talksxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Talksxestablishment->Establishment->find('list');
        $sibases = $this->Talksxestablishment->Sibase->find('list');
        $regions = $this->Talksxestablishment->Region->find('list');
        $this->set(compact('establishments', 'sibases', 'regions'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null, $region, $yer)
    {
        $establishments = $this->Odonxestablishment->Establishment->find('list');
        $sibases = $this->Odonxestablishment->Sibase->find('list');
        $regions = $this->Odonxestablishment->Region->find('list');
        $reg = $region;

        if (!$this->Odonxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Odonxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de odontologia del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Odonxestablishment.' . $this->Odonxestablishment->primaryKey => $id));
            $this->request->data = $this->Odonxestablishment->find('first', $options);
        }
        $this->set(compact('establishments', 'sibases', 'regions', 'reg', 'yer'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Talksxestablishment->id = $id;
        if (!$this->Talksxestablishment->exists()) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Talksxestablishment->delete()) {
            $this->Flash->success(__('The talksxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The talksxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    //***************************************** prueba de excel *************************************************



    public function cargar_Evaluacion($yer)
    {
        
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        
        $regions = $this->Odonxestablishment->Region->find('list');
        $we = $this->Session->read('Auth.User.regions_id');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer, 'we' => $we));
    }

    public function cargar()
    {
        $this->autoRender = false;
        $this->autoLayout = false;
        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];

        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Odonxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Odonxestablishment.regions_id' => $reg,
                    'Odonxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
        $exi = $this->Odonxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Odonxestablishment.regions_id' => $reg,
                    'Odonxestablishment.year' => $year
                ),
            )
        );

        if ($reg == 1) {
            $estanum = 31;
        } elseif ($reg == 2) {
            $estanum = 34;
        } elseif ($reg == 3) {
            $estanum = 20;
        } elseif ($reg == 4) {
            $estanum = 27;
        } elseif ($reg == 5) {
            $estanum = 55;
        }

        if ($existe[0][0]['total'] != $estanum) {
            echo "YA EXISTEN REGISTROS PARA ESTE CARGO FUNCIONAL, VERIFIQUE";

        } else {
            $user_id_reg = $this->Session->read('Auth.User.id');
            $user_na_reg = $this->Session->read('Auth.User.nombre_usuario');
            $carpeta = $user_id_reg . "-" . $user_na_reg;
            //datos de archivo excel
            $dir = WWW_ROOT . DS . 'files/' . $carpeta . "";
            $dir_ver = 'files/' . $carpeta . "";
            $fileName = $dir_ver;
            $path = $_FILES['archivo0']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            //validar que es un excel
            if ($ext != "xlsx") {
                return "<div class='error'><h3>El archivo no es soportado por el sistema. Utilice un archivo de Excel valido (XLSX) </h3></div>";
            }

            /*
             * CARGA DE TODOS LOS ARCHIVOS
             */
            $fileNameArray = array();
            for ($i = 0; $i < sizeof($_FILES); $i++) {

                if (!empty($_FILES['archivo' . $i]['tmp_name']) && is_uploaded_file($_FILES['archivo' . $i]['tmp_name'])) {
                    $filename = basename($_FILES['archivo' . $i]['name']);
                    
                    if (file_exists($dir) && is_dir($dir)) {
                        //Si la carpeta existe solo se copia el archivo del temporal hacia la carpeta de sesion

                        move_uploaded_file($_FILES['archivo' . $i]['tmp_name'], $dir . "/" . $filename);
                    } elseif (mkdir($dir, 0777)) {
                        //Si la carpeta de sesion no existe, se crea la carpeta con permisos y se copia el archivo
                        move_uploaded_file($_FILES['archivo' . $i]['tmp_name'], $dir . "/" . $filename);
                    }
                }

                $fileName .= '/' . $filename;
                $fileNameArray[$i] = $fileName;
                $fileName = $dir_ver;
            }

            $fileName = $fileNameArray[0];
            $data = new PHPExcel_Reader_Excel2007();
            $excelObj = $data->load($fileName);
            $worksheetNames = $excelObj->getSheetNames($fileName);

            $numeroPestanas = $excelObj->getSheetCount();
            /*
             * Pestaña de Permanentes
             */
            $existe = $numeroPestanas - 0;

            if ($existe == 0)
                $fijos = array();
            else
                $fijos = $excelObj->setActiveSheetIndex(0);

            if (!empty($fijos))
                $datos = true;
            else
                return "<h3>Este archivo Excel no cuenta con informacion. Verifique el archivo cargado!</h3>";

            $tope = $excelObj->getActiveSheet()->getHighestRow();

            //$tope = 12;
            $n = $objetivo_id = 0;

            for ($i = 4; $i <= $tope; $i++) {
                /*
                  LECTURA
                 */

                $establishments_id = trim($excelObj->getActiveSheet()->getCell('C' . $i)->getValue());

                $totpac_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $totpro_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $rec_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $cha_enero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $con_enero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());

                $totpac_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $totpro_febrero = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $rec_febrero = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $cha_febrero = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $con_febrero = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());

                $totpac_marzo = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $totpro_marzo = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $rec_marzo = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $cha_marzo = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $con_marzo = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());

                $totpac_abril = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $totpro_abril = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $rec_abril = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $cha_abril = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $con_abril = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());

                $totpac_mayo = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $totpro_mayo = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $rec_mayo = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $cha_mayo = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $con_mayo = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());

                $totpac_junio = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $totpro_junio = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $rec_junio = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $cha_junio = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $con_junio = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());

                $totpac_julio = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $totpro_julio = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $rec_julio = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $cha_julio = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $con_julio = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());

                $totpac_agosto = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());
                $totpro_agosto = trim($excelObj->getActiveSheet()->getCell('AO' . $i)->getValue());
                $rec_agosto = trim($excelObj->getActiveSheet()->getCell('AP' . $i)->getValue());
                $cha_agosto = trim($excelObj->getActiveSheet()->getCell('AQ' . $i)->getValue());
                $con_agosto = trim($excelObj->getActiveSheet()->getCell('AR' . $i)->getValue());

                $totpac_septiembre = trim($excelObj->getActiveSheet()->getCell('AS' . $i)->getValue());
                $totpro_septiembre = trim($excelObj->getActiveSheet()->getCell('AT' . $i)->getValue());
                $rec_septiembre = trim($excelObj->getActiveSheet()->getCell('AU' . $i)->getValue());
                $cha_septiembre = trim($excelObj->getActiveSheet()->getCell('AV' . $i)->getValue());
                $con_septiembre = trim($excelObj->getActiveSheet()->getCell('AW' . $i)->getValue());

                $totpac_octubre = trim($excelObj->getActiveSheet()->getCell('AX' . $i)->getValue());
                $totpro_octubre = trim($excelObj->getActiveSheet()->getCell('AY' . $i)->getValue());
                $rec_octubre = trim($excelObj->getActiveSheet()->getCell('AZ' . $i)->getValue());
                $cha_octubre = trim($excelObj->getActiveSheet()->getCell('BA' . $i)->getValue());
                $con_octubre = trim($excelObj->getActiveSheet()->getCell('BB' . $i)->getValue());

                $totpac_noviembre = trim($excelObj->getActiveSheet()->getCell('BC' . $i)->getValue());
                $totpro_noviembre = trim($excelObj->getActiveSheet()->getCell('BD' . $i)->getValue());
                $rec_noviembre = trim($excelObj->getActiveSheet()->getCell('BE' . $i)->getValue());
                $cha_noviembre = trim($excelObj->getActiveSheet()->getCell('BF' . $i)->getValue());
                $con_noviembre = trim($excelObj->getActiveSheet()->getCell('BG' . $i)->getValue());

                $totpac_diciembre = trim($excelObj->getActiveSheet()->getCell('BH' . $i)->getValue());
                $totpro_diciembre = trim($excelObj->getActiveSheet()->getCell('BI' . $i)->getValue());
                $rec_diciembre = trim($excelObj->getActiveSheet()->getCell('BJ' . $i)->getValue());
                $cha_diciembre = trim($excelObj->getActiveSheet()->getCell('BK' . $i)->getValue());
                $con_diciembre = trim($excelObj->getActiveSheet()->getCell('BL' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Odonxestablishment']['establishments_id'] = $establishments_id;

                    $page['Odonxestablishment']['totpac_january'] = $totpac_enero;
                    $page['Odonxestablishment']['totpro_january'] = $totpro_enero;
                    $page['Odonxestablishment']['rec_january'] = $rec_enero;
                    $page['Odonxestablishment']['cha_january'] = $cha_enero;
                    $page['Odonxestablishment']['con_january'] = $con_enero;

                    $page['Odonxestablishment']['totpac_february'] = $totpac_febrero;
                    $page['Odonxestablishment']['totpro_february'] = $totpro_febrero;
                    $page['Odonxestablishment']['rec_february'] = $rec_febrero;
                    $page['Odonxestablishment']['cha_february'] = $cha_febrero;
                    $page['Odonxestablishment']['con_february'] = $con_febrero;

                    $page['Odonxestablishment']['totpac_march'] = $totpac_marzo;
                    $page['Odonxestablishment']['totpro_march'] = $totpro_marzo;
                    $page['Odonxestablishment']['rec_march'] = $rec_marzo;
                    $page['Odonxestablishment']['cha_march'] = $cha_marzo;
                    $page['Odonxestablishment']['con_march'] = $con_marzo;

                    $page['Odonxestablishment']['totpac_april'] = $totpac_abril;
                    $page['Odonxestablishment']['totpro_april'] = $totpro_abril;
                    $page['Odonxestablishment']['rec_april'] = $rec_abril;
                    $page['Odonxestablishment']['cha_april'] = $cha_abril;
                    $page['Odonxestablishment']['con_april'] = $con_abril;

                    $page['Odonxestablishment']['totpac_may'] = $totpac_mayo;
                    $page['Odonxestablishment']['totpro_may'] = $totpro_mayo;
                    $page['Odonxestablishment']['rec_may'] = $rec_mayo;
                    $page['Odonxestablishment']['cha_may'] = $cha_mayo;
                    $page['Odonxestablishment']['con_may'] = $con_mayo;

                    $page['Odonxestablishment']['totpac_june'] = $totpac_junio;
                    $page['Odonxestablishment']['totpro_june'] = $totpro_junio;
                    $page['Odonxestablishment']['rec_june'] = $rec_junio;
                    $page['Odonxestablishment']['cha_june'] = $cha_junio;
                    $page['Odonxestablishment']['con_june'] = $con_junio;

                    $page['Odonxestablishment']['totpac_july'] = $totpac_julio;
                    $page['Odonxestablishment']['totpro_july'] = $totpro_julio;
                    $page['Odonxestablishment']['rec_july'] = $rec_julio;
                    $page['Odonxestablishment']['cha_july'] = $cha_julio;
                    $page['Odonxestablishment']['con_july'] = $con_julio;

                    $page['Odonxestablishment']['totpac_august'] = $totpac_agosto;
                    $page['Odonxestablishment']['totpro_august'] = $totpro_agosto;
                    $page['Odonxestablishment']['rec_august'] = $rec_agosto;
                    $page['Odonxestablishment']['cha_august'] = $cha_agosto;
                    $page['Odonxestablishment']['con_august'] = $con_agosto;

                    $page['Odonxestablishment']['totpac_septiembre'] = $totpac_septiembre;
                    $page['Odonxestablishment']['totpro_septiembre'] = $totpro_septiembre;
                    $page['Odonxestablishment']['rec_septiembre'] = $rec_septiembre;
                    $page['Odonxestablishment']['cha_septiembre'] = $cha_septiembre;
                    $page['Odonxestablishment']['con_septiembre'] = $con_septiembre;

                    $page['Odonxestablishment']['totpac_october'] = $totpac_octubre;
                    $page['Odonxestablishment']['totpro_october'] = $totpro_octubre;
                    $page['Odonxestablishment']['rec_october'] = $rec_octubre;
                    $page['Odonxestablishment']['cha_october'] = $cha_octubre;
                    $page['Odonxestablishment']['con_october'] = $con_octubre;

                    $page['Odonxestablishment']['totpac_november'] = $totpac_noviembre;
                    $page['Odonxestablishment']['totpro_november'] = $totpro_noviembre;
                    $page['Odonxestablishment']['rec_november'] = $rec_noviembre;
                    $page['Odonxestablishment']['cha_november'] = $cha_noviembre;
                    $page['Odonxestablishment']['con_november'] = $con_noviembre;

                    $page['Odonxestablishment']['totpac_december'] = $totpac_diciembre;
                    $page['Odonxestablishment']['totpro_december'] = $totpro_diciembre;
                    $page['Odonxestablishment']['rec_december'] = $rec_diciembre;
                    $page['Odonxestablishment']['cha_december'] = $cha_diciembre;
                    $page['Odonxestablishment']['con_december'] = $con_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Odonxestablishment->query("UPDATE Odonxestablishments SET totpac_january = '$totpac_enero', totpac_february = '$totpac_febrero', totpac_march = '$totpac_marzo', totpac_april = '$totpac_abril', totpac_may = '$totpac_mayo', totpac_june = '$totpac_junio', totpac_july = '$totpac_julio', totpac_august = '$totpac_agosto', totpac_september = '$totpac_septiembre', totpac_october = '$totpac_octubre', totpac_november = '$totpac_noviembre', totpac_december = '$totpac_diciembre', 
                        
                        totpro_january = '$totpro_enero', totpro_february = '$totpro_febrero', totpro_march = '$totpro_marzo', totpro_april = '$totpro_abril', totpro_may = '$totpro_mayo', totpro_june = '$totpro_junio', totpro_july = '$totpro_julio', totpro_august = '$totpro_agosto', totpro_september = '$totpro_septiembre', totpro_october = '$totpro_octubre', totpro_november = '$totpro_noviembre', totpro_december = '$totpro_diciembre', 
                        
                        rec_january = '$rec_enero', rec_february = '$rec_febrero', rec_march = '$rec_marzo', rec_april = '$rec_abril', rec_may = '$rec_mayo', rec_june = '$rec_junio', rec_july = '$rec_julio', rec_august = '$rec_agosto', rec_september = '$rec_septiembre', rec_october = '$rec_octubre', rec_november = '$rec_noviembre', rec_december = '$rec_diciembre',

                        cha_january = '$cha_enero', cha_february = '$cha_febrero', cha_march = '$cha_marzo', cha_april = '$cha_abril', cha_may = '$cha_mayo', cha_june = '$cha_junio', cha_july = '$cha_julio', cha_august = '$cha_agosto', cha_september = '$cha_septiembre', cha_october = '$cha_octubre', cha_november = '$cha_noviembre', cha_december = '$cha_diciembre',

                        con_january = '$con_enero', con_february = '$con_febrero', con_march = '$con_marzo', con_april = '$con_abril', con_may = '$con_mayo', con_june = '$con_junio', con_july = '$con_julio', con_august = '$con_agosto', con_september = '$con_septiembre', con_october = '$con_octubre', con_november = '$con_noviembre', con_december = '$con_diciembre'
                        
                        WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Odonxestablishment->create();
                        // $this->Odonxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        unlink($fileName);
        $layout = 1;
        
        $this->loadModel('Bitacora');
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Odontologia de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);  
        
        
        $this->redirect([
            'controller' => 'Odonxestablishments',
            'action' => 'index', $reg, $year, $layout
        ]);
        
    }



    public function import()
    {
        $regions = $this->Odonxestablishment->Region->find('list');
        //$yir = $this->request->query('yir');
        $datos = $this->request->data;
        $this->set(compact('regions', 'datos'));
    }


    public function ejemplo()
    {
        //llamada al modelo de bitacora
        $this->loadModel('Bitacora');
        //asignacion de variables 
        $descripcion = "INGRESO DE DATOS DE LA TABLA X.....";
        $Bitacora["Bitacora"]["descripcion"] = $descripcion;
        $Bitacora["Bitacora"]["persona_id"] = 0;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        //LLAMADA A FUNCION GUARDAR DEL MODELO BITACORA, se pasa como parametro el objeto $Bitacora
        $this->Bitacora->save($Bitacora);
    }

}


   






?>