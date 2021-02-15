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

    /**
     * index method
     *
     * @return void
     */
    public function index($region, $yer)
    {
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
        if (!$this->Vaccinesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid vaccinesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Vaccinesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Vaccinesxestablishment.' . $this->Vaccinesxestablishment->primaryKey => $id));
            $this->request->data = $this->Vaccinesxestablishment->find('first', $options);
        }
        $establishments = $this->Vaccinesxestablishment->Establishment->find('list');
        $sibases = $this->Vaccinesxestablishment->Sibase->find('list');
        $regions = $this->Vaccinesxestablishment->Region->find('list');
        $reg = $region;
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
}
