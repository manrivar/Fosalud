<?php
App::uses('AppController', 'Controller');
/**
 * Maternalhcxestablishments Controller
 *
 * @property Talksxestablishment $Talksxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TalksxestablishmentsController extends AppController
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
                'talksxestablishment.year =' => $yir,
                'talksxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'talksxestablishment.year =' => $yir,
                    'talksxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'talksxestablishment.year =' => $yer,
                    'talksxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Talksxestablishment->recursive = 0;
        $this->set('talksxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Talksxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Talksxestablishment.med_january) as m_jan, SUM(Talksxestablishment.nur_january) as n_jan, SUM(Talksxestablishment.med_february) as m_feb, SUM(Talksxestablishment.nur_february) as n_feb, SUM(Talksxestablishment.med_march) as m_mar, SUM(Talksxestablishment.nur_march) as n_mar, SUM(Talksxestablishment.med_april) as m_apr, SUM(Talksxestablishment.nur_april) as n_apr, SUM(Talksxestablishment.med_may) as m_may, SUM(Talksxestablishment.nur_may) as n_may, SUM(Talksxestablishment.med_june) as m_jun, SUM(Talksxestablishment.nur_june) as n_jun, SUM(Talksxestablishment.med_july) as m_jul, SUM(Talksxestablishment.nur_july) as n_jul,  SUM(Talksxestablishment.med_august) as m_aug, SUM(Talksxestablishment.nur_august) as n_aug, SUM(Talksxestablishment.med_september) as m_sep, SUM(Talksxestablishment.nur_september) as n_sep, SUM(Talksxestablishment.med_october) as m_oct, SUM(Talksxestablishment.nur_october) as n_oct, SUM(Talksxestablishment.med_november) as m_nov, SUM(Talksxestablishment.nur_november) as n_nov, SUM(Talksxestablishment.med_december) as m_decem, SUM(Talksxestablishment.nur_december) as n_decem, SUM(Talksxestablishment.den_january) as d_jan, SUM(Talksxestablishment.ot_january) as o_jan, SUM(Talksxestablishment.den_february) as d_feb, SUM(Talksxestablishment.ot_february) as o_feb, SUM(Talksxestablishment.den_march) as d_mar, SUM(Talksxestablishment.ot_march) as o_mar, SUM(Talksxestablishment.den_april) as d_apr, SUM(Talksxestablishment.ot_april) as o_apr, SUM(Talksxestablishment.den_may) as d_may, SUM(Talksxestablishment.ot_may) as o_may, SUM(Talksxestablishment.den_june) as d_jun, SUM(Talksxestablishment.ot_june) as o_jun, SUM(Talksxestablishment.den_july) as d_jul, SUM(Talksxestablishment.ot_july) as o_jul,  SUM(Talksxestablishment.den_august) as d_aug, SUM(Talksxestablishment.ot_august) as o_aug, SUM(Talksxestablishment.den_september) as d_sep, SUM(Talksxestablishment.ot_september) as o_sep, SUM(Talksxestablishment.den_october) as d_oct, SUM(Talksxestablishment.ot_october) as o_oct, SUM(Talksxestablishment.den_november) as d_nov, SUM(Talksxestablishment.ot_november) as o_nov, SUM(Talksxestablishment.den_december) as d_decem, SUM(Talksxestablishment.ot_december) as o_decem'),
                    'conditions' => array(
                        'Talksxestablishment.year =' => $yir,
                        'Talksxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['n_jan'];
            $mostrar_total_jan3 = $months[0][0]['d_jan'];
            $mostrar_total_jan4 = $months[0][0]['o_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['n_feb'];
            $mostrar_total_feb3 = $months[0][0]['d_feb'];
            $mostrar_total_feb4 = $months[0][0]['o_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['n_mar'];
            $mostrar_total_mar3 = $months[0][0]['d_mar'];
            $mostrar_total_mar4 = $months[0][0]['o_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['n_apr'];
            $mostrar_total_apr3 = $months[0][0]['d_apr'];
            $mostrar_total_apr4 = $months[0][0]['o_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['n_may'];
            $mostrar_total_may3 = $months[0][0]['d_may'];
            $mostrar_total_may4 = $months[0][0]['o_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['n_jun'];
            $mostrar_total_jun3 = $months[0][0]['d_jun'];
            $mostrar_total_jun4 = $months[0][0]['o_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['n_jul'];
            $mostrar_total_jul3 = $months[0][0]['d_jul'];
            $mostrar_total_jul4 = $months[0][0]['o_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['n_aug'];
            $mostrar_total_aug3 = $months[0][0]['d_aug'];
            $mostrar_total_aug4 = $months[0][0]['o_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['n_sep'];
            $mostrar_total_sep3 = $months[0][0]['d_sep'];
            $mostrar_total_sep4 = $months[0][0]['o_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['n_oct'];
            $mostrar_total_oct3 = $months[0][0]['d_oct'];
            $mostrar_total_oct4 = $months[0][0]['o_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['n_nov'];
            $mostrar_total_nov3 = $months[0][0]['d_nov'];
            $mostrar_total_nov4 = $months[0][0]['o_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['n_decem'];
            $mostrar_total_dec3 = $months[0][0]['d_decem'];
            $mostrar_total_dec4 = $months[0][0]['o_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'n_jan' => $mostrar_total_jan2, 'n_feb' => $mostrar_total_feb2, 'n_mar' => $mostrar_total_mar2, 'n_apr' => $mostrar_total_apr2, 'n_may' => $mostrar_total_may2, 'n_jun' => $mostrar_total_jun2, 'n_jul' => $mostrar_total_jul2, 'n_aug' => $mostrar_total_aug2, 'n_sep' => $mostrar_total_sep2, 'n_oct' => $mostrar_total_oct2, 'n_nov' => $mostrar_total_nov2, 'n_decem' => $mostrar_total_dec2,'d_jan' => $mostrar_total_jan3, 'd_feb' => $mostrar_total_feb3, 'd_mar' => $mostrar_total_mar3, 'd_apr' => $mostrar_total_apr3, 'd_may' => $mostrar_total_may3, 'd_jun' => $mostrar_total_jun3, 'd_jul' => $mostrar_total_jul3, 'd_aug' => $mostrar_total_aug3, 'd_sep' => $mostrar_total_sep3, 'd_oct' => $mostrar_total_oct3, 'd_nov' => $mostrar_total_nov3, 'd_decem' => $mostrar_total_dec3, 'o_jan' => $mostrar_total_jan4, 'o_feb' => $mostrar_total_feb4, 'o_mar' => $mostrar_total_mar4, 'o_apr' => $mostrar_total_apr4, 'o_may' => $mostrar_total_may4, 'o_jun' => $mostrar_total_jun4, 'o_jul' => $mostrar_total_jul4, 'o_aug' => $mostrar_total_aug4, 'o_sep' => $mostrar_total_sep4, 'o_oct' => $mostrar_total_oct4, 'o_nov' => $mostrar_total_nov4, 'o_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] +
                     $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                     $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] + 
                     $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                     $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                     $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                     $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] + 
                     $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                     $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] + 
                     $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'];

            $this->loadModel('Talk');
            $this->Talk->query("UPDATE talks SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE talks.regions_id = $region && talks.year = $yir");
        } else {
            // Talksxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Talksxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Talksxestablishment.med_january) as m_jan, SUM(Talksxestablishment.nur_january) as n_jan, SUM(Talksxestablishment.med_february) as m_feb, SUM(Talksxestablishment.nur_february) as n_feb, SUM(Talksxestablishment.med_march) as m_mar, SUM(Talksxestablishment.nur_march) as n_mar, SUM(Talksxestablishment.med_april) as m_apr, SUM(Talksxestablishment.nur_april) as n_apr, SUM(Talksxestablishment.med_may) as m_may, SUM(Talksxestablishment.nur_may) as n_may, SUM(Talksxestablishment.med_june) as m_jun, SUM(Talksxestablishment.nur_june) as n_jun, SUM(Talksxestablishment.med_july) as m_jul, SUM(Talksxestablishment.nur_july) as n_jul,  SUM(Talksxestablishment.med_august) as m_aug, SUM(Talksxestablishment.nur_august) as n_aug, SUM(Talksxestablishment.med_september) as m_sep, SUM(Talksxestablishment.nur_september) as n_sep, SUM(Talksxestablishment.med_october) as m_oct, SUM(Talksxestablishment.nur_october) as n_oct, SUM(Talksxestablishment.med_november) as m_nov, SUM(Talksxestablishment.nur_november) as n_nov, SUM(Talksxestablishment.med_december) as m_decem, SUM(Talksxestablishment.nur_december) as n_decem, SUM(Talksxestablishment.den_january) as d_jan, SUM(Talksxestablishment.ot_january) as o_jan, SUM(Talksxestablishment.den_february) as d_feb, SUM(Talksxestablishment.ot_february) as o_feb, SUM(Talksxestablishment.den_march) as d_mar, SUM(Talksxestablishment.ot_march) as o_mar, SUM(Talksxestablishment.den_april) as d_apr, SUM(Talksxestablishment.ot_april) as o_apr, SUM(Talksxestablishment.den_may) as d_may, SUM(Talksxestablishment.ot_may) as o_may, SUM(Talksxestablishment.den_june) as d_jun, SUM(Talksxestablishment.ot_june) as o_jun, SUM(Talksxestablishment.den_july) as d_jul, SUM(Talksxestablishment.ot_july) as o_jul,  SUM(Talksxestablishment.den_august) as d_aug, SUM(Talksxestablishment.ot_august) as o_aug, SUM(Talksxestablishment.den_september) as d_sep, SUM(Talksxestablishment.ot_september) as o_sep, SUM(Talksxestablishment.den_october) as d_oct, SUM(Talksxestablishment.ot_october) as o_oct, SUM(Talksxestablishment.den_november) as d_nov, SUM(Talksxestablishment.ot_november) as o_nov, SUM(Talksxestablishment.den_december) as d_decem, SUM(Talksxestablishment.ot_december) as o_decem'),
                    'conditions' => array(
                        'Talksxestablishment.year =' => $yer,
                        'Talksxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['n_jan'];
            $mostrar_total_jan3 = $months[0][0]['d_jan'];
            $mostrar_total_jan4 = $months[0][0]['o_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['n_feb'];
            $mostrar_total_feb3 = $months[0][0]['d_feb'];
            $mostrar_total_feb4 = $months[0][0]['o_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['n_mar'];
            $mostrar_total_mar3 = $months[0][0]['d_mar'];
            $mostrar_total_mar4 = $months[0][0]['o_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['n_apr'];
            $mostrar_total_apr3 = $months[0][0]['d_apr'];
            $mostrar_total_apr4 = $months[0][0]['o_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['n_may'];
            $mostrar_total_may3 = $months[0][0]['d_may'];
            $mostrar_total_may4 = $months[0][0]['o_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['n_jun'];
            $mostrar_total_jun3 = $months[0][0]['d_jun'];
            $mostrar_total_jun4 = $months[0][0]['o_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['n_jul'];
            $mostrar_total_jul3 = $months[0][0]['d_jul'];
            $mostrar_total_jul4 = $months[0][0]['o_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['n_aug'];
            $mostrar_total_aug3 = $months[0][0]['d_aug'];
            $mostrar_total_aug4 = $months[0][0]['o_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['n_sep'];
            $mostrar_total_sep3 = $months[0][0]['d_sep'];
            $mostrar_total_sep4 = $months[0][0]['o_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['n_oct'];
            $mostrar_total_oct3 = $months[0][0]['d_oct'];
            $mostrar_total_oct4 = $months[0][0]['o_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['n_nov'];
            $mostrar_total_nov3 = $months[0][0]['d_nov'];
            $mostrar_total_nov4 = $months[0][0]['o_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['n_decem'];
            $mostrar_total_dec3 = $months[0][0]['d_decem'];
            $mostrar_total_dec4 = $months[0][0]['o_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'n_jan' => $mostrar_total_jan2, 'n_feb' => $mostrar_total_feb2, 'n_mar' => $mostrar_total_mar2, 'n_apr' => $mostrar_total_apr2, 'n_may' => $mostrar_total_may2, 'n_jun' => $mostrar_total_jun2, 'n_jul' => $mostrar_total_jul2, 'n_aug' => $mostrar_total_aug2, 'n_sep' => $mostrar_total_sep2, 'n_oct' => $mostrar_total_oct2, 'n_nov' => $mostrar_total_nov2, 'n_decem' => $mostrar_total_dec2, 'd_jan' => $mostrar_total_jan3, 'd_feb' => $mostrar_total_feb3, 'd_mar' => $mostrar_total_mar3, 'd_apr' => $mostrar_total_apr3, 'd_may' => $mostrar_total_may3, 'd_jun' => $mostrar_total_jun3, 'd_jul' => $mostrar_total_jul3, 'd_aug' => $mostrar_total_aug3, 'd_sep' => $mostrar_total_sep3, 'd_oct' => $mostrar_total_oct3, 'd_nov' => $mostrar_total_nov3, 'd_decem' => $mostrar_total_dec3, 'o_jan' => $mostrar_total_jan4, 'o_feb' => $mostrar_total_feb4, 'o_mar' => $mostrar_total_mar4, 'o_apr' => $mostrar_total_apr4, 'o_may' => $mostrar_total_may4, 'o_jun' => $mostrar_total_jun4, 'o_jul' => $mostrar_total_jul4, 'o_aug' => $mostrar_total_aug4, 'o_sep' => $mostrar_total_sep4, 'o_oct' => $mostrar_total_oct4, 'o_nov' => $mostrar_total_nov4, 'o_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] +
                $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] +
                $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] +
                $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] +
                $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'];

            $this->loadModel('Talk');
            $this->Talk->query("UPDATE talks SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE talks.regions_id = $region && talks.year = $yer");
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
        if (!$this->Talksxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Talksxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Talksxestablishment.' . $this->Talksxestablishment->primaryKey => $id));
            $this->request->data = $this->Talksxestablishment->find('first', $options);
        }
        $establishments = $this->Talksxestablishment->Establishment->find('list');
        $sibases = $this->Talksxestablishment->Sibase->find('list');
        $regions = $this->Talksxestablishment->Region->find('list');
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
}
