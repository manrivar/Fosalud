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
    //*****************************************/ prueba de excel *************************************************
    public function Autorizacion()
    {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 2) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }

    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Eventsxestablishment->Region->find('list');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
    }

    public function cargar()
    {
        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Eventsxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Eventsxestablishment.regions_id' => $reg,
                    'Eventsxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
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
                $d_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $c_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $z_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $c1_enero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $d_febrero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $c_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $z_febrero = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $c1_febrero = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $d_marzo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $c_marzo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $z_marzo = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $c1_marzo = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $d_abril = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $c_abril = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $z_abril = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $c1_abril = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $d_mayo = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $c_mayo = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $z_mayo = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $c1_mayo = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $d_junio = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $c_junio = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $z_junio = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $c1_junio = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $d_julio = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());
                $c_julio = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $z_julio = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $c1_julio = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $d_agosto = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $c_agosto = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());
                $z_agosto = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $c1_agosto = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $d_septiembre = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $c_septiembre = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $z_septiembre = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());
                $c1_septiembre = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());
                $d_octubre = trim($excelObj->getActiveSheet()->getCell('AO' . $i)->getValue());
                $c_octubre = trim($excelObj->getActiveSheet()->getCell('AP' . $i)->getValue());
                $z_octubre = trim($excelObj->getActiveSheet()->getCell('AQ' . $i)->getValue());
                $c1_octubre = trim($excelObj->getActiveSheet()->getCell('AR' . $i)->getValue());
                $d_noviembre = trim($excelObj->getActiveSheet()->getCell('AS' . $i)->getValue());
                $c_noviembre = trim($excelObj->getActiveSheet()->getCell('AT' . $i)->getValue());
                $z_noviembre = trim($excelObj->getActiveSheet()->getCell('AU' . $i)->getValue());
                $c1_noviembre = trim($excelObj->getActiveSheet()->getCell('AV' . $i)->getValue());
                $d_diciembre = trim($excelObj->getActiveSheet()->getCell('AW' . $i)->getValue());
                $c_diciembre = trim($excelObj->getActiveSheet()->getCell('AX' . $i)->getValue());
                $z_diciembre = trim($excelObj->getActiveSheet()->getCell('AY' . $i)->getValue());
                $c1_diciembre = trim($excelObj->getActiveSheet()->getCell('AZ' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Eventsxestablishment']['establishments_id'] = $establishments_id;
                    $page['Eventsxestablishment']['den_january'] = $d_enero;
                    $page['Eventsxestablishment']['chi_january'] = $c_enero;
                    $page['Eventsxestablishment']['zik_january'] = $z_enero;
                    $page['Eventsxestablishment']['c19_january'] = $c1_enero;
                    $page['Eventsxestablishment']['den_february'] = $d_febrero;
                    $page['Eventsxestablishment']['chi_february'] = $c_febrero;
                    $page['Eventsxestablishment']['zik_february'] = $z_febrero;
                    $page['Eventsxestablishment']['c19_february'] = $c1_febrero;
                    $page['Eventsxestablishment']['den_march'] = $d_marzo;
                    $page['Eventsxestablishment']['chi_march'] = $c_marzo;
                    $page['Eventsxestablishment']['zik_march'] = $z_marzo;
                    $page['Eventsxestablishment']['c19_march'] = $c1_marzo;
                    $page['Eventsxestablishment']['den_april'] = $d_abril;
                    $page['Eventsxestablishment']['chi_april'] = $c_abril;
                    $page['Eventsxestablishment']['zik_april'] = $z_abril;
                    $page['Eventsxestablishment']['c19_april'] = $c1_abril;
                    $page['Eventsxestablishment']['den_may'] = $d_mayo;
                    $page['Eventsxestablishment']['chi_may'] = $c_mayo;
                    $page['Eventsxestablishment']['zik_may'] = $z_mayo;
                    $page['Eventsxestablishment']['c19_may'] = $c1_mayo;
                    $page['Eventsxestablishment']['den_june'] = $d_junio;
                    $page['Eventsxestablishment']['chi_june'] = $c_junio;
                    $page['Eventsxestablishment']['zik_june'] = $z_junio;
                    $page['Eventsxestablishment']['c19_june'] = $c1_junio;
                    $page['Eventsxestablishment']['den_july'] = $d_julio;
                    $page['Eventsxestablishment']['chi_july'] = $c_julio;
                    $page['Eventsxestablishment']['zik_july'] = $z_julio;
                    $page['Eventsxestablishment']['c19_july'] = $c1_julio;
                    $page['Eventsxestablishment']['den_august'] = $d_agosto;
                    $page['Eventsxestablishment']['chi_august'] = $c_agosto;
                    $page['Eventsxestablishment']['zik_august'] = $z_agosto;
                    $page['Eventsxestablishment']['c19_august'] = $c1_agosto;
                    $page['Eventsxestablishment']['den_septiembre'] = $d_septiembre;
                    $page['Eventsxestablishment']['chi_septiembre'] = $c_septiembre;
                    $page['Eventsxestablishment']['zik_septiembre'] = $z_septiembre;
                    $page['Eventsxestablishment']['c19_septiembre'] = $c1_septiembre;
                    $page['Eventsxestablishment']['den_october'] = $d_octubre;
                    $page['Eventsxestablishment']['chi_october'] = $c_octubre;
                    $page['Eventsxestablishment']['zik_october'] = $z_octubre;
                    $page['Eventsxestablishment']['c19_october'] = $c1_octubre;
                    $page['Eventsxestablishment']['den_november'] = $d_noviembre;
                    $page['Eventsxestablishment']['chi_november'] = $c_noviembre;
                    $page['Eventsxestablishment']['zik_november'] = $z_noviembre;
                    $page['Eventsxestablishment']['c19_november'] = $c1_noviembre;
                    $page['Eventsxestablishment']['den_december'] = $d_diciembre;
                    $page['Eventsxestablishment']['chi_december'] = $c_diciembre;
                    $page['Eventsxestablishment']['zik_december'] = $z_diciembre;
                    $page['Eventsxestablishment']['c19_december'] = $c1_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Eventsxestablishment->query("UPDATE eventsxestablishments SET den_january = '$d_enero', den_february = '$d_febrero', den_march = '$d_marzo', den_april = '$d_abril', den_may = '$d_mayo', den_june = '$d_junio', den_july = '$d_julio', den_august = '$d_agosto', den_september = '$d_septiembre', den_october = '$d_octubre', den_november = '$d_noviembre', den_december = '$d_diciembre', chi_january = '$c_enero', chi_february = '$c_febrero', chi_march = '$c_marzo', chi_april = '$c_abril', chi_may = '$c_mayo', chi_june = '$c_junio', chi_july = '$c_julio', chi_august = '$c_agosto', chi_september = '$c_septiembre', chi_october = '$c_octubre', chi_november = '$c_noviembre', chi_december = '$c_diciembre', zik_january = '$z_enero', zik_february = '$z_febrero', zik_march = '$z_marzo', zik_april = '$z_abril', zik_may = '$z_mayo', zik_june = '$z_junio', zik_july = '$z_julio', zik_august = '$z_agosto', zik_september = '$z_septiembre', zik_october = '$z_octubre', zik_november = '$z_noviembre', zik_december = '$z_diciembre',c19_january = '$c1_enero', c19_february = '$c1_febrero', c19_march = '$c1_marzo', c19_april = '$c1_abril', c19_may = '$c1_mayo', c19_june = '$c1_junio', c19_july = '$c1_julio', c19_august = '$c1_agosto', c19_september = '$c1_septiembre', c19_october = '$c1_octubre', c19_november = '$c1_noviembre', c19_december = '$c1_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Eventsxestablishment->create();
                        // $this->Eventsxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        $this->redirect([
            'controller' => 'Eventsxestablishments',
            'action' => 'index', $reg, $year
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