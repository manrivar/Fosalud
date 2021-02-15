<?php
App::uses('AppController', 'Controller');
/**
 * Eventsxestablishments Controller
 *
 * @property Eventsxestablishment $Eventsxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class EventsxestablishmentsController extends AppController
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
                'eventsxestablishment.year =' => $yir,
                'eventsxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'eventsxestablishment.year =' => $yir,
                    'eventsxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'eventsxestablishment.year =' => $yer,
                    'eventsxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Eventsxestablishment->recursive = 0;
        $this->set('eventsxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Eventsxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Eventsxestablishment.den_january) as d_jan, SUM(Eventsxestablishment.chi_january) as c_jan, SUM(Eventsxestablishment.den_february) as d_feb, SUM(Eventsxestablishment.chi_february) as c_feb, SUM(Eventsxestablishment.den_march) as d_mar, SUM(Eventsxestablishment.chi_march) as c_mar, SUM(Eventsxestablishment.den_april) as d_apr, SUM(Eventsxestablishment.chi_april) as c_apr, SUM(Eventsxestablishment.den_may) as d_may, SUM(Eventsxestablishment.chi_may) as c_may, SUM(Eventsxestablishment.den_june) as d_jun, SUM(Eventsxestablishment.chi_june) as c_jun, SUM(Eventsxestablishment.den_july) as d_jul, SUM(Eventsxestablishment.chi_july) as c_jul,  SUM(Eventsxestablishment.den_august) as d_aug, SUM(Eventsxestablishment.chi_august) as c_aug, SUM(Eventsxestablishment.den_september) as d_sep, SUM(Eventsxestablishment.chi_september) as c_sep, SUM(Eventsxestablishment.den_october) as d_oct, SUM(Eventsxestablishment.chi_october) as c_oct, SUM(Eventsxestablishment.den_november) as d_nov, SUM(Eventsxestablishment.chi_november) as c_nov, SUM(Eventsxestablishment.den_december) as d_decem, SUM(Eventsxestablishment.chi_december) as c_decem, SUM(Eventsxestablishment.zik_january) as z_jan, SUM(Eventsxestablishment.c19_january) as c1_jan, SUM(Eventsxestablishment.zik_february) as z_feb, SUM(Eventsxestablishment.c19_february) as c1_feb, SUM(Eventsxestablishment.zik_march) as z_mar, SUM(Eventsxestablishment.c19_march) as c1_mar, SUM(Eventsxestablishment.zik_april) as z_apr, SUM(Eventsxestablishment.c19_april) as c1_apr, SUM(Eventsxestablishment.zik_may) as z_may, SUM(Eventsxestablishment.c19_may) as c1_may, SUM(Eventsxestablishment.zik_june) as z_jun, SUM(Eventsxestablishment.c19_june) as c1_jun, SUM(Eventsxestablishment.zik_july) as z_jul, SUM(Eventsxestablishment.c19_july) as c1_jul,  SUM(Eventsxestablishment.zik_august) as z_aug, SUM(Eventsxestablishment.c19_august) as c1_aug, SUM(Eventsxestablishment.zik_september) as z_sep, SUM(Eventsxestablishment.c19_september) as c1_sep, SUM(Eventsxestablishment.zik_october) as z_oct, SUM(Eventsxestablishment.c19_october) as c1_oct, SUM(Eventsxestablishment.zik_november) as z_nov, SUM(Eventsxestablishment.c19_november) as c1_nov, SUM(Eventsxestablishment.zik_december) as z_decem, SUM(Eventsxestablishment.c19_december) as c1_decem'),
                    'conditions' => array(
                        'Eventsxestablishment.year =' => $yir,
                        'Eventsxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['d_jan'];
            $mostrar_total_jan2 = $months[0][0]['c_jan'];
            $mostrar_total_jan3 = $months[0][0]['z_jan'];
            $mostrar_total_jan4 = $months[0][0]['c1_jan'];
            $mostrar_total_feb1 = $months[0][0]['d_feb'];
            $mostrar_total_feb2 = $months[0][0]['c_feb'];
            $mostrar_total_feb3 = $months[0][0]['z_feb'];
            $mostrar_total_feb4 = $months[0][0]['c1_feb'];
            $mostrar_total_mar1 = $months[0][0]['d_mar'];
            $mostrar_total_mar2 = $months[0][0]['c_mar'];
            $mostrar_total_mar3 = $months[0][0]['z_mar'];
            $mostrar_total_mar4 = $months[0][0]['c1_mar'];
            $mostrar_total_apr1 = $months[0][0]['d_apr'];
            $mostrar_total_apr2 = $months[0][0]['c_apr'];
            $mostrar_total_apr3 = $months[0][0]['z_apr'];
            $mostrar_total_apr4 = $months[0][0]['c1_apr'];
            $mostrar_total_may1 = $months[0][0]['d_may'];
            $mostrar_total_may2 = $months[0][0]['c_may'];
            $mostrar_total_may3 = $months[0][0]['z_may'];
            $mostrar_total_may4 = $months[0][0]['c1_may'];
            $mostrar_total_jun1 = $months[0][0]['d_jun'];
            $mostrar_total_jun2 = $months[0][0]['c_jun'];
            $mostrar_total_jun3 = $months[0][0]['z_jun'];
            $mostrar_total_jun4 = $months[0][0]['c1_jun'];
            $mostrar_total_jul1 = $months[0][0]['d_jul'];
            $mostrar_total_jul2 = $months[0][0]['c_jul'];
            $mostrar_total_jul3 = $months[0][0]['z_jul'];
            $mostrar_total_jul4 = $months[0][0]['c1_jul'];
            $mostrar_total_aug1 = $months[0][0]['d_aug'];
            $mostrar_total_aug2 = $months[0][0]['c_aug'];
            $mostrar_total_aug3 = $months[0][0]['z_aug'];
            $mostrar_total_aug4 = $months[0][0]['c1_aug'];
            $mostrar_total_sep1 = $months[0][0]['d_sep'];
            $mostrar_total_sep2 = $months[0][0]['c_sep'];
            $mostrar_total_sep3 = $months[0][0]['z_sep'];
            $mostrar_total_sep4 = $months[0][0]['c1_sep'];
            $mostrar_total_oct1 = $months[0][0]['d_oct'];
            $mostrar_total_oct2 = $months[0][0]['c_oct'];
            $mostrar_total_oct3 = $months[0][0]['z_oct'];
            $mostrar_total_oct4 = $months[0][0]['c1_oct'];
            $mostrar_total_nov1 = $months[0][0]['d_nov'];
            $mostrar_total_nov2 = $months[0][0]['c_nov'];
            $mostrar_total_nov3 = $months[0][0]['z_nov'];
            $mostrar_total_nov4 = $months[0][0]['c1_nov'];
            $mostrar_total_dec1 = $months[0][0]['d_decem'];
            $mostrar_total_dec2 = $months[0][0]['c_decem'];
            $mostrar_total_dec3 = $months[0][0]['z_decem'];
            $mostrar_total_dec4 = $months[0][0]['c1_decem'];
            $this->set(array('d_jan' => $mostrar_total_jan1, 'd_feb' => $mostrar_total_feb1, 'd_mar' => $mostrar_total_mar1, 'd_apr' => $mostrar_total_apr1, 'd_may' => $mostrar_total_may1, 'd_jun' => $mostrar_total_jun1, 'd_jul' => $mostrar_total_jul1, 'd_aug' => $mostrar_total_aug1, 'd_sep' => $mostrar_total_sep1, 'd_oct' => $mostrar_total_oct1, 'd_nov' => $mostrar_total_nov1, 'd_decem' => $mostrar_total_dec1, 'c_jan' => $mostrar_total_jan2, 'c_feb' => $mostrar_total_feb2, 'c_mar' => $mostrar_total_mar2, 'c_apr' => $mostrar_total_apr2, 'c_may' => $mostrar_total_may2, 'c_jun' => $mostrar_total_jun2, 'c_jul' => $mostrar_total_jul2, 'c_aug' => $mostrar_total_aug2, 'c_sep' => $mostrar_total_sep2, 'c_oct' => $mostrar_total_oct2, 'c_nov' => $mostrar_total_nov2, 'c_decem' => $mostrar_total_dec2, 'z_jan' => $mostrar_total_jan3, 'z_feb' => $mostrar_total_feb3, 'z_mar' => $mostrar_total_mar3, 'z_apr' => $mostrar_total_apr3, 'z_may' => $mostrar_total_may3, 'z_jun' => $mostrar_total_jun3, 'z_jul' => $mostrar_total_jul3, 'z_aug' => $mostrar_total_aug3, 'z_sep' => $mostrar_total_sep3, 'z_oct' => $mostrar_total_oct3, 'z_nov' => $mostrar_total_nov3, 'z_decem' => $mostrar_total_dec3, 'c1_jan' => $mostrar_total_jan4, 'c1_feb' => $mostrar_total_feb4, 'c1_mar' => $mostrar_total_mar4, 'c1_apr' => $mostrar_total_apr4, 'c1_may' => $mostrar_total_may4, 'c1_jun' => $mostrar_total_jun4, 'c1_jul' => $mostrar_total_jul4, 'c1_aug' => $mostrar_total_aug4, 'c1_sep' => $mostrar_total_sep4, 'c1_oct' => $mostrar_total_oct4, 'c1_nov' => $mostrar_total_nov4, 'c1_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                $months[0][0]['z_jan'] + $months[0][0]['z_feb'] + $months[0][0]['z_mar'] +
                $months[0][0]['c1_jan'] + $months[0][0]['c1_feb'] + $months[0][0]['c1_mar'];
            $trim2 = $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                $months[0][0]['z_apr'] + $months[0][0]['z_may'] + $months[0][0]['z_jun'] +
                $months[0][0]['c1_apr'] + $months[0][0]['c1_may'] + $months[0][0]['c1_jun'];
            $trim3 = $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                $months[0][0]['z_jul'] + $months[0][0]['z_aug'] + $months[0][0]['z_sep'] +
                $months[0][0]['c1_jul'] + $months[0][0]['c1_aug'] + $months[0][0]['c1_sep'];
            $trim4 = $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] +
                $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] +
                $months[0][0]['z_oct'] + $months[0][0]['z_nov'] + $months[0][0]['z_decem'] +
                $months[0][0]['c1_oct'] + $months[0][0]['c1_nov'] + $months[0][0]['c1_decem'];

            $this->loadModel('Event');
            $this->Event->query("UPDATE events SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE events.regions_id = $region && events.year = $yir");
        } else {
            // Eventsxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Eventsxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Eventsxestablishment.den_january) as d_jan, SUM(Eventsxestablishment.chi_january) as c_jan, SUM(Eventsxestablishment.den_february) as d_feb, SUM(Eventsxestablishment.chi_february) as c_feb, SUM(Eventsxestablishment.den_march) as d_mar, SUM(Eventsxestablishment.chi_march) as c_mar, SUM(Eventsxestablishment.den_april) as d_apr, SUM(Eventsxestablishment.chi_april) as c_apr, SUM(Eventsxestablishment.den_may) as d_may, SUM(Eventsxestablishment.chi_may) as c_may, SUM(Eventsxestablishment.den_june) as d_jun, SUM(Eventsxestablishment.chi_june) as c_jun, SUM(Eventsxestablishment.den_july) as d_jul, SUM(Eventsxestablishment.chi_july) as c_jul,  SUM(Eventsxestablishment.den_august) as d_aug, SUM(Eventsxestablishment.chi_august) as c_aug, SUM(Eventsxestablishment.den_september) as d_sep, SUM(Eventsxestablishment.chi_september) as c_sep, SUM(Eventsxestablishment.den_october) as d_oct, SUM(Eventsxestablishment.chi_october) as c_oct, SUM(Eventsxestablishment.den_november) as d_nov, SUM(Eventsxestablishment.chi_november) as c_nov, SUM(Eventsxestablishment.den_december) as d_decem, SUM(Eventsxestablishment.chi_december) as c_decem, SUM(Eventsxestablishment.zik_january) as z_jan, SUM(Eventsxestablishment.c19_january) as c1_jan, SUM(Eventsxestablishment.zik_february) as z_feb, SUM(Eventsxestablishment.c19_february) as c1_feb, SUM(Eventsxestablishment.zik_march) as z_mar, SUM(Eventsxestablishment.c19_march) as c1_mar, SUM(Eventsxestablishment.zik_april) as z_apr, SUM(Eventsxestablishment.c19_april) as c1_apr, SUM(Eventsxestablishment.zik_may) as z_may, SUM(Eventsxestablishment.c19_may) as c1_may, SUM(Eventsxestablishment.zik_june) as z_jun, SUM(Eventsxestablishment.c19_june) as c1_jun, SUM(Eventsxestablishment.zik_july) as z_jul, SUM(Eventsxestablishment.c19_july) as c1_jul,  SUM(Eventsxestablishment.zik_august) as z_aug, SUM(Eventsxestablishment.c19_august) as c1_aug, SUM(Eventsxestablishment.zik_september) as z_sep, SUM(Eventsxestablishment.c19_september) as c1_sep, SUM(Eventsxestablishment.zik_october) as z_oct, SUM(Eventsxestablishment.c19_october) as c1_oct, SUM(Eventsxestablishment.zik_november) as z_nov, SUM(Eventsxestablishment.c19_november) as c1_nov, SUM(Eventsxestablishment.zik_december) as z_decem, SUM(Eventsxestablishment.c19_december) as c1_decem'),
                    'conditions' => array(
                        'Eventsxestablishment.year =' => $yer,
                        'Eventsxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['d_jan'];
            $mostrar_total_jan2 = $months[0][0]['c_jan'];
            $mostrar_total_jan3 = $months[0][0]['z_jan'];
            $mostrar_total_jan4 = $months[0][0]['c1_jan'];
            $mostrar_total_feb1 = $months[0][0]['d_feb'];
            $mostrar_total_feb2 = $months[0][0]['c_feb'];
            $mostrar_total_feb3 = $months[0][0]['z_feb'];
            $mostrar_total_feb4 = $months[0][0]['c1_feb'];
            $mostrar_total_mar1 = $months[0][0]['d_mar'];
            $mostrar_total_mar2 = $months[0][0]['c_mar'];
            $mostrar_total_mar3 = $months[0][0]['z_mar'];
            $mostrar_total_mar4 = $months[0][0]['c1_mar'];
            $mostrar_total_apr1 = $months[0][0]['d_apr'];
            $mostrar_total_apr2 = $months[0][0]['c_apr'];
            $mostrar_total_apr3 = $months[0][0]['z_apr'];
            $mostrar_total_apr4 = $months[0][0]['c1_apr'];
            $mostrar_total_may1 = $months[0][0]['d_may'];
            $mostrar_total_may2 = $months[0][0]['c_may'];
            $mostrar_total_may3 = $months[0][0]['z_may'];
            $mostrar_total_may4 = $months[0][0]['c1_may'];
            $mostrar_total_jun1 = $months[0][0]['d_jun'];
            $mostrar_total_jun2 = $months[0][0]['c_jun'];
            $mostrar_total_jun3 = $months[0][0]['z_jun'];
            $mostrar_total_jun4 = $months[0][0]['c1_jun'];
            $mostrar_total_jul1 = $months[0][0]['d_jul'];
            $mostrar_total_jul2 = $months[0][0]['c_jul'];
            $mostrar_total_jul3 = $months[0][0]['z_jul'];
            $mostrar_total_jul4 = $months[0][0]['c1_jul'];
            $mostrar_total_aug1 = $months[0][0]['d_aug'];
            $mostrar_total_aug2 = $months[0][0]['c_aug'];
            $mostrar_total_aug3 = $months[0][0]['z_aug'];
            $mostrar_total_aug4 = $months[0][0]['c1_aug'];
            $mostrar_total_sep1 = $months[0][0]['d_sep'];
            $mostrar_total_sep2 = $months[0][0]['c_sep'];
            $mostrar_total_sep3 = $months[0][0]['z_sep'];
            $mostrar_total_sep4 = $months[0][0]['c1_sep'];
            $mostrar_total_oct1 = $months[0][0]['d_oct'];
            $mostrar_total_oct2 = $months[0][0]['c_oct'];
            $mostrar_total_oct3 = $months[0][0]['z_oct'];
            $mostrar_total_oct4 = $months[0][0]['c1_oct'];
            $mostrar_total_nov1 = $months[0][0]['d_nov'];
            $mostrar_total_nov2 = $months[0][0]['c_nov'];
            $mostrar_total_nov3 = $months[0][0]['z_nov'];
            $mostrar_total_nov4 = $months[0][0]['c1_nov'];
            $mostrar_total_dec1 = $months[0][0]['d_decem'];
            $mostrar_total_dec2 = $months[0][0]['c_decem'];
            $mostrar_total_dec3 = $months[0][0]['z_decem'];
            $mostrar_total_dec4 = $months[0][0]['c1_decem'];
            $this->set(array('d_jan' => $mostrar_total_jan1, 'd_feb' => $mostrar_total_feb1, 'd_mar' => $mostrar_total_mar1, 'd_apr' => $mostrar_total_apr1, 'd_may' => $mostrar_total_may1, 'd_jun' => $mostrar_total_jun1, 'd_jul' => $mostrar_total_jul1, 'd_aug' => $mostrar_total_aug1, 'd_sep' => $mostrar_total_sep1, 'd_oct' => $mostrar_total_oct1, 'd_nov' => $mostrar_total_nov1, 'd_decem' => $mostrar_total_dec1, 'c_jan' => $mostrar_total_jan2, 'c_feb' => $mostrar_total_feb2, 'c_mar' => $mostrar_total_mar2, 'c_apr' => $mostrar_total_apr2, 'c_may' => $mostrar_total_may2, 'c_jun' => $mostrar_total_jun2, 'c_jul' => $mostrar_total_jul2, 'c_aug' => $mostrar_total_aug2, 'c_sep' => $mostrar_total_sep2, 'c_oct' => $mostrar_total_oct2, 'c_nov' => $mostrar_total_nov2, 'c_decem' => $mostrar_total_dec2, 'z_jan' => $mostrar_total_jan3, 'z_feb' => $mostrar_total_feb3, 'z_mar' => $mostrar_total_mar3, 'z_apr' => $mostrar_total_apr3, 'z_may' => $mostrar_total_may3, 'z_jun' => $mostrar_total_jun3, 'z_jul' => $mostrar_total_jul3, 'z_aug' => $mostrar_total_aug3, 'z_sep' => $mostrar_total_sep3, 'z_oct' => $mostrar_total_oct3, 'z_nov' => $mostrar_total_nov3, 'z_decem' => $mostrar_total_dec3, 'c1_jan' => $mostrar_total_jan4, 'c1_feb' => $mostrar_total_feb4, 'c1_mar' => $mostrar_total_mar4, 'c1_apr' => $mostrar_total_apr4, 'c1_may' => $mostrar_total_may4, 'c1_jun' => $mostrar_total_jun4, 'c1_jul' => $mostrar_total_jul4, 'c1_aug' => $mostrar_total_aug4, 'c1_sep' => $mostrar_total_sep4, 'c1_oct' => $mostrar_total_oct4, 'c1_nov' => $mostrar_total_nov4, 'c1_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                $months[0][0]['z_jan'] + $months[0][0]['z_feb'] + $months[0][0]['z_mar'] +
                $months[0][0]['c1_jan'] + $months[0][0]['c1_feb'] + $months[0][0]['c1_mar'];
            $trim2 = $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                $months[0][0]['z_apr'] + $months[0][0]['z_may'] + $months[0][0]['z_jun'] +
                $months[0][0]['c1_apr'] + $months[0][0]['c1_may'] + $months[0][0]['c1_jun'];
            $trim3 = $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                $months[0][0]['z_jul'] + $months[0][0]['z_aug'] + $months[0][0]['z_sep'] +
                $months[0][0]['c1_jul'] + $months[0][0]['c1_aug'] + $months[0][0]['c1_sep'];
            $trim4 = $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] +
                $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] +
                $months[0][0]['z_oct'] + $months[0][0]['z_nov'] + $months[0][0]['z_decem'] +
                $months[0][0]['c1_oct'] + $months[0][0]['c1_nov'] + $months[0][0]['c1_decem'];

            $this->loadModel('Event');
            $this->Event->query("UPDATE events SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE events.regions_id = $region && events.year = $yer");
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
        if (!$this->Eventsxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid eventsxestablishment'));
        }
        $options = array('conditions' => array('Eventsxestablishment.' . $this->Eventsxestablishment->primaryKey => $id));
        $this->set('eventsxestablishment', $this->Eventsxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Eventsxestablishment->create();
            if ($this->Eventsxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The eventsxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The eventsxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Eventsxestablishment->Establishment->find('list');
        $sibases = $this->Eventsxestablishment->Sibase->find('list');
        $regions = $this->Eventsxestablishment->Region->find('list');
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
        if (!$this->Eventsxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid eventsxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Eventsxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Eventsxestablishment.' . $this->Eventsxestablishment->primaryKey => $id));
            $this->request->data = $this->Eventsxestablishment->find('first', $options);
        }
        $establishments = $this->Eventsxestablishment->Establishment->find('list');
        $sibases = $this->Eventsxestablishment->Sibase->find('list');
        $regions = $this->Eventsxestablishment->Region->find('list');
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
        $this->Eventsxestablishment->id = $id;
        if (!$this->Eventsxestablishment->exists()) {
            throw new NotFoundException(__('Invalid eventsxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Eventsxestablishment->delete()) {
            $this->Flash->success(__('The eventsxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The eventsxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
