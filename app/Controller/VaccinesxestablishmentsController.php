<?php
App::uses('AppController', 'Controller');
/**
 * Vaccinesxestablishments Controller
 *
 * @property Vaccinesxestablishment $Vaccinesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class VaccinesxestablishmentsController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session', 'Flash');
    public $layout = 'default';

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
                'vaccinesxestablishment.year =' => $yir,
                'vaccinesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'vaccinesxestablishment.year =' => $yir,
                    'vaccinesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'vaccinesxestablishment.year =' => $yer,
                    'vaccinesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Vaccinesxestablishment->recursive = 0;
        $this->set('vaccinesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Vaccinesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Vaccinesxestablishment.niñ_january) as n_jan, SUM(Vaccinesxestablishment.adu_january) as a_jan, SUM(Vaccinesxestablishment.niñ_february) as n_feb, SUM(Vaccinesxestablishment.adu_february) as a_feb, SUM(Vaccinesxestablishment.niñ_march) as n_mar, SUM(Vaccinesxestablishment.adu_march) as a_mar, SUM(Vaccinesxestablishment.niñ_april) as n_apr, SUM(Vaccinesxestablishment.adu_april) as a_apr, SUM(Vaccinesxestablishment.niñ_may) as n_may, SUM(Vaccinesxestablishment.adu_may) as a_may, SUM(Vaccinesxestablishment.niñ_june) as n_jun, SUM(Vaccinesxestablishment.adu_june) as a_jun, SUM(Vaccinesxestablishment.niñ_july) as n_jul, SUM(Vaccinesxestablishment.adu_july) as a_jul,  SUM(Vaccinesxestablishment.niñ_august) as n_aug, SUM(Vaccinesxestablishment.adu_august) as a_aug, SUM(Vaccinesxestablishment.niñ_september) as n_sep, SUM(Vaccinesxestablishment.adu_september) as a_sep, SUM(Vaccinesxestablishment.niñ_october) as n_oct, SUM(Vaccinesxestablishment.adu_october) as a_oct, SUM(Vaccinesxestablishment.niñ_november) as n_nov, SUM(Vaccinesxestablishment.adu_november) as a_nov, SUM(Vaccinesxestablishment.niñ_december) as n_decem, SUM(Vaccinesxestablishment.adu_december) as a_decem, SUM(Vaccinesxestablishment.inf_january) as i_jan, SUM(Vaccinesxestablishment.ant_january) as an_jan, SUM(Vaccinesxestablishment.inf_february) as i_feb, SUM(Vaccinesxestablishment.ant_february) as an_feb, SUM(Vaccinesxestablishment.inf_march) as i_mar, SUM(Vaccinesxestablishment.ant_march) as an_mar, SUM(Vaccinesxestablishment.inf_april) as i_apr, SUM(Vaccinesxestablishment.ant_april) as an_apr, SUM(Vaccinesxestablishment.inf_may) as i_may, SUM(Vaccinesxestablishment.ant_may) as an_may, SUM(Vaccinesxestablishment.inf_june) as i_jun, SUM(Vaccinesxestablishment.ant_june) as an_jun, SUM(Vaccinesxestablishment.inf_july) as i_jul, SUM(Vaccinesxestablishment.ant_july) as an_jul,  SUM(Vaccinesxestablishment.inf_august) as i_aug, SUM(Vaccinesxestablishment.ant_august) as an_aug, SUM(Vaccinesxestablishment.inf_september) as i_sep, SUM(Vaccinesxestablishment.ant_september) as an_sep, SUM(Vaccinesxestablishment.inf_october) as i_oct, SUM(Vaccinesxestablishment.ant_october) as an_oct, SUM(Vaccinesxestablishment.inf_november) as i_nov, SUM(Vaccinesxestablishment.ant_november) as an_nov, SUM(Vaccinesxestablishment.inf_december) as i_decem, SUM(Vaccinesxestablishment.ant_december) as an_decem, SUM(Vaccinesxestablishment.c19_january) as c_jan, SUM(Vaccinesxestablishment.c19_february) as c_feb, SUM(Vaccinesxestablishment.c19_march) as c_mar, SUM(Vaccinesxestablishment.c19_april) as c_apr, SUM(Vaccinesxestablishment.c19_may) as c_may, SUM(Vaccinesxestablishment.c19_june) as c_jun, SUM(Vaccinesxestablishment.c19_july) as c_jul, SUM(Vaccinesxestablishment.c19_august) as c_aug, SUM(Vaccinesxestablishment.c19_september) as c_sep, SUM(Vaccinesxestablishment.c19_october) as c_oct, SUM(Vaccinesxestablishment.c19_november) as c_nov, SUM(Vaccinesxestablishment.c19_december) as c_decem'),
                    'conditions' => array(
                        'Vaccinesxestablishment.year =' => $yir,
                        'Vaccinesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['n_jan'];
            $mostrar_total_jan2 = $months[0][0]['a_jan'];
            $mostrar_total_jan3 = $months[0][0]['i_jan'];
            $mostrar_total_jan4 = $months[0][0]['an_jan'];
            $mostrar_total_jan5 = $months[0][0]['c_jan'];
            $mostrar_total_feb1 = $months[0][0]['n_feb'];
            $mostrar_total_feb2 = $months[0][0]['a_feb'];
            $mostrar_total_feb3 = $months[0][0]['i_feb'];
            $mostrar_total_feb4 = $months[0][0]['an_feb'];
            $mostrar_total_feb5 = $months[0][0]['c_feb'];
            $mostrar_total_mar1 = $months[0][0]['n_mar'];
            $mostrar_total_mar2 = $months[0][0]['a_mar'];
            $mostrar_total_mar3 = $months[0][0]['i_mar'];
            $mostrar_total_mar4 = $months[0][0]['an_mar'];
            $mostrar_total_mar5 = $months[0][0]['c_mar'];
            $mostrar_total_apr1 = $months[0][0]['n_apr'];
            $mostrar_total_apr2 = $months[0][0]['a_apr'];
            $mostrar_total_apr3 = $months[0][0]['i_apr'];
            $mostrar_total_apr4 = $months[0][0]['an_apr'];
            $mostrar_total_apr5 = $months[0][0]['c_apr'];
            $mostrar_total_may1 = $months[0][0]['n_may'];
            $mostrar_total_may2 = $months[0][0]['a_may'];
            $mostrar_total_may3 = $months[0][0]['i_may'];
            $mostrar_total_may4 = $months[0][0]['an_may'];
            $mostrar_total_may5 = $months[0][0]['c_may'];
            $mostrar_total_jun1 = $months[0][0]['n_jun'];
            $mostrar_total_jun2 = $months[0][0]['a_jun'];
            $mostrar_total_jun3 = $months[0][0]['i_jun'];
            $mostrar_total_jun4 = $months[0][0]['an_jun'];
            $mostrar_total_jun5 = $months[0][0]['c_jun'];
            $mostrar_total_jul1 = $months[0][0]['n_jul'];
            $mostrar_total_jul2 = $months[0][0]['a_jul'];
            $mostrar_total_jul3 = $months[0][0]['i_jul'];
            $mostrar_total_jul4 = $months[0][0]['an_jul'];
            $mostrar_total_jul5 = $months[0][0]['c_jul'];
            $mostrar_total_aug1 = $months[0][0]['n_aug'];
            $mostrar_total_aug2 = $months[0][0]['a_aug'];
            $mostrar_total_aug3 = $months[0][0]['i_aug'];
            $mostrar_total_aug4 = $months[0][0]['an_aug'];
            $mostrar_total_aug5 = $months[0][0]['c_aug'];
            $mostrar_total_sep1 = $months[0][0]['n_sep'];
            $mostrar_total_sep2 = $months[0][0]['a_sep'];
            $mostrar_total_sep3 = $months[0][0]['i_sep'];
            $mostrar_total_sep4 = $months[0][0]['an_sep'];
            $mostrar_total_sep5 = $months[0][0]['c_sep'];
            $mostrar_total_oct1 = $months[0][0]['n_oct'];
            $mostrar_total_oct2 = $months[0][0]['a_oct'];
            $mostrar_total_oct3 = $months[0][0]['i_oct'];
            $mostrar_total_oct4 = $months[0][0]['an_oct'];
            $mostrar_total_oct5 = $months[0][0]['c_oct'];
            $mostrar_total_nov1 = $months[0][0]['n_nov'];
            $mostrar_total_nov2 = $months[0][0]['a_nov'];
            $mostrar_total_nov3 = $months[0][0]['i_nov'];
            $mostrar_total_nov4 = $months[0][0]['an_nov'];
            $mostrar_total_nov5 = $months[0][0]['c_nov'];
            $mostrar_total_dec1 = $months[0][0]['n_decem'];
            $mostrar_total_dec2 = $months[0][0]['a_decem'];
            $mostrar_total_dec3 = $months[0][0]['i_decem'];
            $mostrar_total_dec4 = $months[0][0]['an_decem'];
            $mostrar_total_dec5 = $months[0][0]['c_decem'];
            $this->set(array(
                'n_jan' => $mostrar_total_jan1, 'n_feb' => $mostrar_total_feb1, 'n_mar' => $mostrar_total_mar1, 'n_apr' => $mostrar_total_apr1, 'n_may' => $mostrar_total_may1, 'n_jun' => $mostrar_total_jun1, 'n_jul' => $mostrar_total_jul1, 'n_aug' => $mostrar_total_aug1, 'n_sep' => $mostrar_total_sep1, 'n_oct' => $mostrar_total_oct1, 'n_nov' => $mostrar_total_nov1, 'n_decem' => $mostrar_total_dec1, 'a_jan' => $mostrar_total_jan2, 'a_feb' => $mostrar_total_feb2, 'a_mar' => $mostrar_total_mar2, 'a_apr' => $mostrar_total_apr2, 'a_may' => $mostrar_total_may2, 'a_jun' => $mostrar_total_jun2, 'a_jul' => $mostrar_total_jul2, 'a_aug' => $mostrar_total_aug2, 'a_sep' => $mostrar_total_sep2, 'a_oct' => $mostrar_total_oct2, 'a_nov' => $mostrar_total_nov2, 'a_decem' => $mostrar_total_dec2, 'i_jan' => $mostrar_total_jan3, 'i_feb' => $mostrar_total_feb3, 'i_mar' => $mostrar_total_mar3, 'i_apr' => $mostrar_total_apr3, 'i_may' => $mostrar_total_may3, 'i_jun' => $mostrar_total_jun3, 'i_jul' => $mostrar_total_jul3, 'i_aug' => $mostrar_total_aug3, 'i_sep' => $mostrar_total_sep3, 'i_oct' => $mostrar_total_oct3, 'i_nov' => $mostrar_total_nov3, 'i_decem' => $mostrar_total_dec3, 'an_jan' => $mostrar_total_jan4, 'an_feb' => $mostrar_total_feb4, 'an_mar' => $mostrar_total_mar4, 'an_apr' => $mostrar_total_apr4, 'an_may' => $mostrar_total_may4, 'an_jun' => $mostrar_total_jun4, 'an_jul' => $mostrar_total_jul4, 'an_aug' => $mostrar_total_aug4, 'an_sep' => $mostrar_total_sep4, 'an_oct' => $mostrar_total_oct4, 'an_nov' => $mostrar_total_nov4, 'an_decem' => $mostrar_total_dec4, 'c_jan' => $mostrar_total_jan5, 'c_feb' => $mostrar_total_feb5, 'c_mar' => $mostrar_total_mar5, 'c_apr' => $mostrar_total_apr5, 'c_may' => $mostrar_total_may5, 'c_jun' => $mostrar_total_jun5, 'c_jul' => $mostrar_total_jul5, 'c_aug' => $mostrar_total_aug5, 'c_sep' => $mostrar_total_sep5, 'c_oct' => $mostrar_total_oct5, 'c_nov' => $mostrar_total_nov5, 'c_decem' => $mostrar_total_dec5
             )
            );

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] + $months[0][0]['a_jan'] + $months[0][0]['a_feb'] + $months[0][0]['a_mar'] + $months[0][0]['i_jan'] + $months[0][0]['i_feb'] + $months[0][0]['i_mar'] + $months[0][0]['an_jan'] + $months[0][0]['an_feb'] + $months[0][0]['an_mar'] + $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'];
            $trim2 = $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] +
                $months[0][0]['a_apr'] + $months[0][0]['a_may'] + $months[0][0]['a_jun'] +
                $months[0][0]['i_apr'] + $months[0][0]['i_may'] + $months[0][0]['i_jun'] +
                $months[0][0]['an_apr'] + $months[0][0]['an_may'] + $months[0][0]['an_jun'] +
                $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'];
            $trim3 = $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                $months[0][0]['a_jul'] + $months[0][0]['a_aug'] + $months[0][0]['a_sep'] +
                $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                $months[0][0]['an_jul'] + $months[0][0]['an_aug'] + $months[0][0]['an_sep'] +
                $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'];
            $trim4 = $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                $months[0][0]['a_oct'] + $months[0][0]['a_nov'] + $months[0][0]['a_decem'] +
                $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem'] +
                $months[0][0]['an_oct'] + $months[0][0]['an_nov'] + $months[0][0]['an_decem'] +
                $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'];

            $this->loadModel('Vaccine');
            $this->Vaccine->query("UPDATE vaccines SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE vaccines.regions_id = $region && vaccines.year = $yir");
        } else {
            // Vaccinesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Vaccinesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Vaccinesxestablishment.niñ_january) as n_jan, SUM(Vaccinesxestablishment.adu_january) as a_jan, SUM(Vaccinesxestablishment.niñ_february) as n_feb, SUM(Vaccinesxestablishment.adu_february) as a_feb, SUM(Vaccinesxestablishment.niñ_march) as n_mar, SUM(Vaccinesxestablishment.adu_march) as a_mar, SUM(Vaccinesxestablishment.niñ_april) as n_apr, SUM(Vaccinesxestablishment.adu_april) as a_apr, SUM(Vaccinesxestablishment.niñ_may) as n_may, SUM(Vaccinesxestablishment.adu_may) as a_may, SUM(Vaccinesxestablishment.niñ_june) as n_jun, SUM(Vaccinesxestablishment.adu_june) as a_jun, SUM(Vaccinesxestablishment.niñ_july) as n_jul, SUM(Vaccinesxestablishment.adu_july) as a_jul,  SUM(Vaccinesxestablishment.niñ_august) as n_aug, SUM(Vaccinesxestablishment.adu_august) as a_aug, SUM(Vaccinesxestablishment.niñ_september) as n_sep, SUM(Vaccinesxestablishment.adu_september) as a_sep, SUM(Vaccinesxestablishment.niñ_october) as n_oct, SUM(Vaccinesxestablishment.adu_october) as a_oct, SUM(Vaccinesxestablishment.niñ_november) as n_nov, SUM(Vaccinesxestablishment.adu_november) as a_nov, SUM(Vaccinesxestablishment.niñ_december) as n_decem, SUM(Vaccinesxestablishment.adu_december) as a_decem, SUM(Vaccinesxestablishment.inf_january) as i_jan, SUM(Vaccinesxestablishment.ant_january) as an_jan, SUM(Vaccinesxestablishment.inf_february) as i_feb, SUM(Vaccinesxestablishment.ant_february) as an_feb, SUM(Vaccinesxestablishment.inf_march) as i_mar, SUM(Vaccinesxestablishment.ant_march) as an_mar, SUM(Vaccinesxestablishment.inf_april) as i_apr, SUM(Vaccinesxestablishment.ant_april) as an_apr, SUM(Vaccinesxestablishment.inf_may) as i_may, SUM(Vaccinesxestablishment.ant_may) as an_may, SUM(Vaccinesxestablishment.inf_june) as i_jun, SUM(Vaccinesxestablishment.ant_june) as an_jun, SUM(Vaccinesxestablishment.inf_july) as i_jul, SUM(Vaccinesxestablishment.ant_july) as an_jul,  SUM(Vaccinesxestablishment.inf_august) as i_aug, SUM(Vaccinesxestablishment.ant_august) as an_aug, SUM(Vaccinesxestablishment.inf_september) as i_sep, SUM(Vaccinesxestablishment.ant_september) as an_sep, SUM(Vaccinesxestablishment.inf_october) as i_oct, SUM(Vaccinesxestablishment.ant_october) as an_oct, SUM(Vaccinesxestablishment.inf_november) as i_nov, SUM(Vaccinesxestablishment.ant_november) as an_nov, SUM(Vaccinesxestablishment.inf_december) as i_decem, SUM(Vaccinesxestablishment.ant_december) as an_decem, SUM(Vaccinesxestablishment.c19_january) as c_jan, SUM(Vaccinesxestablishment.c19_february) as c_feb, SUM(Vaccinesxestablishment.c19_march) as c_mar, SUM(Vaccinesxestablishment.c19_april) as c_apr, SUM(Vaccinesxestablishment.c19_may) as c_may, SUM(Vaccinesxestablishment.c19_june) as c_jun, SUM(Vaccinesxestablishment.c19_july) as c_jul, SUM(Vaccinesxestablishment.c19_august) as c_aug, SUM(Vaccinesxestablishment.c19_september) as c_sep, SUM(Vaccinesxestablishment.c19_october) as c_oct, SUM(Vaccinesxestablishment.c19_november) as c_nov, SUM(Vaccinesxestablishment.c19_december) as c_decem'),
                    'conditions' => array(
                        'Vaccinesxestablishment.year =' => $yer,
                        'Vaccinesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['n_jan'];
            $mostrar_total_jan2 = $months[0][0]['a_jan'];
            $mostrar_total_jan3 = $months[0][0]['i_jan'];
            $mostrar_total_jan4 = $months[0][0]['an_jan'];
            $mostrar_total_jan5 = $months[0][0]['c_jan'];
            $mostrar_total_feb1 = $months[0][0]['n_feb'];
            $mostrar_total_feb2 = $months[0][0]['a_feb'];
            $mostrar_total_feb3 = $months[0][0]['i_feb'];
            $mostrar_total_feb4 = $months[0][0]['an_feb'];
            $mostrar_total_feb5 = $months[0][0]['c_feb'];
            $mostrar_total_mar1 = $months[0][0]['n_mar'];
            $mostrar_total_mar2 = $months[0][0]['a_mar'];
            $mostrar_total_mar3 = $months[0][0]['i_mar'];
            $mostrar_total_mar4 = $months[0][0]['an_mar'];
            $mostrar_total_mar5 = $months[0][0]['c_mar'];
            $mostrar_total_apr1 = $months[0][0]['n_apr'];
            $mostrar_total_apr2 = $months[0][0]['a_apr'];
            $mostrar_total_apr3 = $months[0][0]['i_apr'];
            $mostrar_total_apr4 = $months[0][0]['an_apr'];
            $mostrar_total_apr5 = $months[0][0]['c_apr'];
            $mostrar_total_may1 = $months[0][0]['n_may'];
            $mostrar_total_may2 = $months[0][0]['a_may'];
            $mostrar_total_may3 = $months[0][0]['i_may'];
            $mostrar_total_may4 = $months[0][0]['an_may'];
            $mostrar_total_may5 = $months[0][0]['c_may'];
            $mostrar_total_jun1 = $months[0][0]['n_jun'];
            $mostrar_total_jun2 = $months[0][0]['a_jun'];
            $mostrar_total_jun3 = $months[0][0]['i_jun'];
            $mostrar_total_jun4 = $months[0][0]['an_jun'];
            $mostrar_total_jun5 = $months[0][0]['c_jun'];
            $mostrar_total_jul1 = $months[0][0]['n_jul'];
            $mostrar_total_jul2 = $months[0][0]['a_jul'];
            $mostrar_total_jul3 = $months[0][0]['i_jul'];
            $mostrar_total_jul4 = $months[0][0]['an_jul'];
            $mostrar_total_jul5 = $months[0][0]['c_jul'];
            $mostrar_total_aug1 = $months[0][0]['n_aug'];
            $mostrar_total_aug2 = $months[0][0]['a_aug'];
            $mostrar_total_aug3 = $months[0][0]['i_aug'];
            $mostrar_total_aug4 = $months[0][0]['an_aug'];
            $mostrar_total_aug5 = $months[0][0]['c_aug'];
            $mostrar_total_sep1 = $months[0][0]['n_sep'];
            $mostrar_total_sep2 = $months[0][0]['a_sep'];
            $mostrar_total_sep3 = $months[0][0]['i_sep'];
            $mostrar_total_sep4 = $months[0][0]['an_sep'];
            $mostrar_total_sep5 = $months[0][0]['c_sep'];
            $mostrar_total_oct1 = $months[0][0]['n_oct'];
            $mostrar_total_oct2 = $months[0][0]['a_oct'];
            $mostrar_total_oct3 = $months[0][0]['i_oct'];
            $mostrar_total_oct4 = $months[0][0]['an_oct'];
            $mostrar_total_oct5 = $months[0][0]['c_oct'];
            $mostrar_total_nov1 = $months[0][0]['n_nov'];
            $mostrar_total_nov2 = $months[0][0]['a_nov'];
            $mostrar_total_nov3 = $months[0][0]['i_nov'];
            $mostrar_total_nov4 = $months[0][0]['an_nov'];
            $mostrar_total_nov5 = $months[0][0]['c_nov'];
            $mostrar_total_dec1 = $months[0][0]['n_decem'];
            $mostrar_total_dec2 = $months[0][0]['a_decem'];
            $mostrar_total_dec3 = $months[0][0]['i_decem'];
            $mostrar_total_dec4 = $months[0][0]['an_decem'];
            $mostrar_total_dec5 = $months[0][0]['c_decem'];
            $this->set(array('n_jan' => $mostrar_total_jan1, 'n_feb' => $mostrar_total_feb1, 'n_mar' => $mostrar_total_mar1, 'n_apr' => $mostrar_total_apr1, 'n_may' => $mostrar_total_may1, 'n_jun' => $mostrar_total_jun1, 'n_jul' => $mostrar_total_jul1, 'n_aug' => $mostrar_total_aug1, 'n_sep' => $mostrar_total_sep1, 'n_oct' => $mostrar_total_oct1, 'n_nov' => $mostrar_total_nov1, 'n_decem' => $mostrar_total_dec1, 'a_jan' => $mostrar_total_jan2, 'a_feb' => $mostrar_total_feb2, 'a_mar' => $mostrar_total_mar2, 'a_apr' => $mostrar_total_apr2, 'a_may' => $mostrar_total_may2, 'a_jun' => $mostrar_total_jun2, 'a_jul' => $mostrar_total_jul2, 'a_aug' => $mostrar_total_aug2, 'a_sep' => $mostrar_total_sep2, 'a_oct' => $mostrar_total_oct2, 'a_nov' => $mostrar_total_nov2, 'a_decem' => $mostrar_total_dec2, 'i_jan' => $mostrar_total_jan3, 'i_feb' => $mostrar_total_feb3, 'i_mar' => $mostrar_total_mar3, 'i_apr' => $mostrar_total_apr3, 'i_may' => $mostrar_total_may3, 'i_jun' => $mostrar_total_jun3, 'i_jul' => $mostrar_total_jul3, 'i_aug' => $mostrar_total_aug3, 'i_sep' => $mostrar_total_sep3, 'i_oct' => $mostrar_total_oct3, 'i_nov' => $mostrar_total_nov3, 'i_decem' => $mostrar_total_dec3, 'an_jan' => $mostrar_total_jan4, 'an_feb' => $mostrar_total_feb4, 'an_mar' => $mostrar_total_mar4, 'an_apr' => $mostrar_total_apr4, 'an_may' => $mostrar_total_may4, 'an_jun' => $mostrar_total_jun4, 'an_jul' => $mostrar_total_jul4, 'an_aug' => $mostrar_total_aug4, 'an_sep' => $mostrar_total_sep4, 'an_oct' => $mostrar_total_oct4, 'an_nov' => $mostrar_total_nov4, 'an_decem' => $mostrar_total_dec4, 'c_jan' => $mostrar_total_jan5, 'c_feb' => $mostrar_total_feb5, 'c_mar' => $mostrar_total_mar5, 'c_apr' => $mostrar_total_apr5, 'c_may' => $mostrar_total_may5, 'c_jun' => $mostrar_total_jun5, 'c_jul' => $mostrar_total_jul5, 'c_aug' => $mostrar_total_aug5, 'c_sep' => $mostrar_total_sep5, 'c_oct' => $mostrar_total_oct5, 'c_nov' => $mostrar_total_nov5, 'c_decem' => $mostrar_total_dec5));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] +
                $months[0][0]['a_jan'] + $months[0][0]['a_feb'] + $months[0][0]['a_mar'] +
                $months[0][0]['i_jan'] + $months[0][0]['i_feb'] + $months[0][0]['i_mar'] +
                $months[0][0]['an_jan'] + $months[0][0]['an_feb'] + $months[0][0]['an_mar'] +
                $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'];
            $trim2 = $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] +
                $months[0][0]['a_apr'] + $months[0][0]['a_may'] + $months[0][0]['a_jun'] +
                $months[0][0]['i_apr'] + $months[0][0]['i_may'] + $months[0][0]['i_jun'] +
                $months[0][0]['an_apr'] + $months[0][0]['an_may'] + $months[0][0]['an_jun'] +
                $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'];
            $trim3 = $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                $months[0][0]['a_jul'] + $months[0][0]['a_aug'] + $months[0][0]['a_sep'] +
                $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                $months[0][0]['an_jul'] + $months[0][0]['an_aug'] + $months[0][0]['an_sep'] +
                $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'];
            $trim4 = $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                $months[0][0]['a_oct'] + $months[0][0]['a_nov'] + $months[0][0]['a_decem'] +
                $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem'] +
                $months[0][0]['an_oct'] + $months[0][0]['an_nov'] + $months[0][0]['an_decem'] +
                $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'];

            $this->loadModel('Vaccine');
            $this->Vaccine->query("UPDATE vaccines SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE vaccines.regions_id = $region && vaccines.year = $yer");
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
        if (!$this->Vaccinesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid vaccinesxestablishment'));
        }
        $options = array('conditions' => array('Vaccinesxestablishment.' . $this->Vaccinesxestablishment->primaryKey => $id));
        $this->set('vaccinesxestablishment', $this->Vaccinesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Vaccinesxestablishment->create();
            if ($this->Vaccinesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The vaccinesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vaccinesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Vaccinesxestablishment->Establishment->find('list');
        $sibases = $this->Vaccinesxestablishment->Sibase->find('list');
        $regions = $this->Vaccinesxestablishment->Region->find('list');
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
        $establishments = $this->Vaccinesxestablishment->Establishment->find('list');
        $sibases = $this->Vaccinesxestablishment->Sibase->find('list');
        $regions = $this->Vaccinesxestablishment->Region->find('list');
        $reg = $region;
        if (!$this->Vaccinesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid vaccinesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Vaccinesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de vacuna del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Vaccinesxestablishment.' . $this->Vaccinesxestablishment->primaryKey => $id));
            $this->request->data = $this->Vaccinesxestablishment->find('first', $options);
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
        $this->Vaccinesxestablishment->id = $id;
        if (!$this->Vaccinesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid vaccinesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Vaccinesxestablishment->delete()) {
            $this->Flash->success(__('The vaccinesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccinesxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    //*****************************************/ prueba de excel *************************************************

    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Vaccinesxestablishment->Region->find('list');
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
        $existe = $this->Vaccinesxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Vaccinesxestablishment.regions_id' => $reg,
                    'Vaccinesxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
        $exi = $this->Vaccinesxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Vaccinesxestablishment.regions_id' => $reg,
                    'Vaccinesxestablishment.year' => $year
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
                    $out = $dir . "/" . $filename;
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
                $n_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $a_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $i_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $an_enero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $c_enero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $n_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $a_febrero = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $i_febrero = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $an_febrero = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $c_febrero = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $n_marzo = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $a_marzo = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $i_marzo = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $an_marzo = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $c_marzo = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $n_abril = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $a_abril = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $i_abril = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $an_abril = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $c_abril = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $n_mayo = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $a_mayo = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $i_mayo = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $an_mayo = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $c_mayo = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());
                $n_junio = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $a_junio = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $i_junio = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $an_junio = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $c_junio = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());
                $n_julio = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $a_julio = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $i_julio = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $an_julio = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $c_julio = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());
                $n_agosto = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());
                $a_agosto = trim($excelObj->getActiveSheet()->getCell('AO' . $i)->getValue());
                $i_agosto = trim($excelObj->getActiveSheet()->getCell('AP' . $i)->getValue());
                $an_agosto = trim($excelObj->getActiveSheet()->getCell('AQ' . $i)->getValue());
                $c_agosto = trim($excelObj->getActiveSheet()->getCell('AR' . $i)->getValue());
                $n_septiembre = trim($excelObj->getActiveSheet()->getCell('AS' . $i)->getValue());
                $a_septiembre = trim($excelObj->getActiveSheet()->getCell('AT' . $i)->getValue());
                $i_septiembre = trim($excelObj->getActiveSheet()->getCell('AU' . $i)->getValue());
                $an_septiembre = trim($excelObj->getActiveSheet()->getCell('AV' . $i)->getValue());
                $c_septiembre = trim($excelObj->getActiveSheet()->getCell('AW' . $i)->getValue());
                $n_octubre = trim($excelObj->getActiveSheet()->getCell('AX' . $i)->getValue());
                $a_octubre = trim($excelObj->getActiveSheet()->getCell('AY' . $i)->getValue());
                $i_octubre = trim($excelObj->getActiveSheet()->getCell('AZ' . $i)->getValue());
                $an_octubre = trim($excelObj->getActiveSheet()->getCell('BA' . $i)->getValue());
                $c_octubre = trim($excelObj->getActiveSheet()->getCell('BB' . $i)->getValue());
                $n_noviembre = trim($excelObj->getActiveSheet()->getCell('BC' . $i)->getValue());
                $a_noviembre = trim($excelObj->getActiveSheet()->getCell('BD' . $i)->getValue());
                $i_noviembre = trim($excelObj->getActiveSheet()->getCell('BE' . $i)->getValue());
                $an_noviembre = trim($excelObj->getActiveSheet()->getCell('BF' . $i)->getValue());
                $c_noviembre = trim($excelObj->getActiveSheet()->getCell('BG' . $i)->getValue());
                $n_diciembre = trim($excelObj->getActiveSheet()->getCell('BH' . $i)->getValue());
                $a_diciembre = trim($excelObj->getActiveSheet()->getCell('BI' . $i)->getValue());
                $i_diciembre = trim($excelObj->getActiveSheet()->getCell('BJ' . $i)->getValue());
                $an_diciembre = trim($excelObj->getActiveSheet()->getCell('BK' . $i)->getValue());
                $c_diciembre = trim($excelObj->getActiveSheet()->getCell('BL' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Vaccinesxestablishment']['establishments_id'] = $establishments_id;
                    $page['Vaccinesxestablishment']['niñ_january'] = $n_enero;
                    $page['Vaccinesxestablishment']['adu_january'] = $a_enero;
                    $page['Vaccinesxestablishment']['inf_january'] = $i_enero;
                    $page['Vaccinesxestablishment']['ant_january'] = $an_enero;
                    $page['Vaccinesxestablishment']['c19_january'] = $c_enero;
                    $page['Vaccinesxestablishment']['niñ_february'] = $n_febrero;
                    $page['Vaccinesxestablishment']['adu_february'] = $a_febrero;
                    $page['Vaccinesxestablishment']['inf_february'] = $i_febrero;
                    $page['Vaccinesxestablishment']['ant_february'] = $an_febrero;
                    $page['Vaccinesxestablishment']['c19_february'] = $c_febrero;
                    $page['Vaccinesxestablishment']['niñ_march'] = $n_marzo;
                    $page['Vaccinesxestablishment']['adu_march'] = $a_marzo;
                    $page['Vaccinesxestablishment']['inf_march'] = $i_marzo;
                    $page['Vaccinesxestablishment']['ant_march'] = $an_marzo;
                    $page['Vaccinesxestablishment']['c19_march'] = $c_marzo;
                    $page['Vaccinesxestablishment']['niñ_april'] = $n_abril;
                    $page['Vaccinesxestablishment']['adu_april'] = $a_abril;
                    $page['Vaccinesxestablishment']['inf_april'] = $i_abril;
                    $page['Vaccinesxestablishment']['ant_april'] = $an_abril;
                    $page['Vaccinesxestablishment']['c19_april'] = $c_abril;
                    $page['Vaccinesxestablishment']['niñ_may'] = $n_mayo;
                    $page['Vaccinesxestablishment']['adu_may'] = $a_mayo;
                    $page['Vaccinesxestablishment']['inf_may'] = $i_mayo;
                    $page['Vaccinesxestablishment']['ant_may'] = $an_mayo;
                    $page['Vaccinesxestablishment']['c19_may'] = $c_mayo;
                    $page['Vaccinesxestablishment']['niñ_june'] = $n_junio;
                    $page['Vaccinesxestablishment']['adu_june'] = $a_junio;
                    $page['Vaccinesxestablishment']['inf_june'] = $i_junio;
                    $page['Vaccinesxestablishment']['ant_june'] = $an_junio;
                    $page['Vaccinesxestablishment']['c19_june'] = $c_junio;
                    $page['Vaccinesxestablishment']['niñ_july'] = $n_julio;
                    $page['Vaccinesxestablishment']['adu_july'] = $a_julio;
                    $page['Vaccinesxestablishment']['inf_july'] = $i_julio;
                    $page['Vaccinesxestablishment']['ant_july'] = $an_julio;
                    $page['Vaccinesxestablishment']['c19_july'] = $c_julio;
                    $page['Vaccinesxestablishment']['niñ_august'] = $n_agosto;
                    $page['Vaccinesxestablishment']['adu_august'] = $a_agosto;
                    $page['Vaccinesxestablishment']['inf_august'] = $i_agosto;
                    $page['Vaccinesxestablishment']['ant_august'] = $an_agosto;
                    $page['Vaccinesxestablishment']['c19_august'] = $c_agosto;
                    $page['Vaccinesxestablishment']['niñ_septiembre'] = $n_septiembre;
                    $page['Vaccinesxestablishment']['adu_septiembre'] = $a_septiembre;
                    $page['Vaccinesxestablishment']['inf_septiembre'] = $i_septiembre;
                    $page['Vaccinesxestablishment']['ant_septiembre'] = $an_septiembre;
                    $page['Vaccinesxestablishment']['c19_septiembre'] = $c_septiembre;
                    $page['Vaccinesxestablishment']['niñ_october'] = $n_octubre;
                    $page['Vaccinesxestablishment']['adu_october'] = $a_octubre;
                    $page['Vaccinesxestablishment']['inf_october'] = $i_octubre;
                    $page['Vaccinesxestablishment']['ant_october'] = $an_octubre;
                    $page['Vaccinesxestablishment']['c19_october'] = $c_octubre;
                    $page['Vaccinesxestablishment']['niñ_november'] = $n_noviembre;
                    $page['Vaccinesxestablishment']['adu_november'] = $a_noviembre;
                    $page['Vaccinesxestablishment']['inf_november'] = $i_noviembre;
                    $page['Vaccinesxestablishment']['ant_november'] = $an_noviembre;
                    $page['Vaccinesxestablishment']['c19_november'] = $c_noviembre;
                    $page['Vaccinesxestablishment']['niñ_december'] = $n_diciembre;
                    $page['Vaccinesxestablishment']['adu_december'] = $a_diciembre;
                    $page['Vaccinesxestablishment']['inf_december'] = $i_diciembre;
                    $page['Vaccinesxestablishment']['ant_december'] = $an_diciembre;
                    $page['Vaccinesxestablishment']['c19_december'] = $c_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Vaccinesxestablishment->query("UPDATE vaccinesxestablishments SET niñ_january = '$n_enero', niñ_february = '$n_febrero', niñ_march = '$n_marzo', niñ_april = '$n_abril', niñ_may = '$n_mayo', niñ_june = '$n_junio', niñ_july = '$n_julio', niñ_august = '$n_agosto', niñ_september = '$n_septiembre', niñ_october = '$n_octubre', niñ_november = '$n_noviembre', niñ_december = '$n_diciembre', adu_january = '$a_enero', adu_february = '$a_febrero', adu_march = '$a_marzo', adu_april = '$a_abril', adu_may = '$a_mayo', adu_june = '$a_junio', adu_july = '$a_julio', adu_august = '$a_agosto', adu_september = '$a_septiembre', adu_october = '$a_octubre', adu_november = '$a_noviembre', adu_december = '$a_diciembre', inf_january = '$i_enero', inf_february = '$i_febrero', inf_march = '$i_marzo', inf_april = '$i_abril', inf_may = '$i_mayo', inf_june = '$i_junio', inf_july = '$i_julio', inf_august = '$i_agosto', inf_september = '$i_septiembre', inf_october = '$i_octubre', inf_november = '$i_noviembre', inf_december = '$i_diciembre', ant_january = '$an_enero', ant_february = '$an_febrero', ant_march = '$an_marzo', ant_april = '$an_abril', ant_may = '$an_mayo', ant_june = '$an_junio', ant_july = '$an_julio', ant_august = '$an_agosto', ant_september = '$an_septiembre', ant_october = '$an_octubre', ant_november = '$an_noviembre', ant_december = '$an_diciembre', c19_january = '$c_enero', c19_february = '$c_febrero', c19_march = '$c_marzo', c19_april = '$c_abril', c19_may = '$c_mayo', c19_june = '$c_junio', c19_july = '$c_julio', c19_august = '$c_agosto', c19_september = '$c_septiembre', c19_october = '$c_octubre', c19_november = '$c_noviembre', c19_december = '$c_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Vaccinesxestablishment->create();
                        // $this->Vaccinesxestablishment->save($page);


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
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Vacunas de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);

        $this->redirect([
            'controller' => 'Vaccinesxestablishments',
            'action' => 'index', $reg, $year, $layout
        ]);
    }



    public function import()
    {
        $regions = $this->Hcxestablishment->Region->find('list');
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