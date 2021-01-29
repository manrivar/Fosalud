<?php
App::uses('AppController', 'Controller');
/**
 * Recipesxestablishments Controller
 *
 * @property Recipesxestablishment $Recipesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RecipesxestablishmentsController extends AppController
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
                'recipesxestablishment.year =' => $yir,
                'recipesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'recipesxestablishment.year =' => $yir,
                    'recipesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'recipesxestablishment.year =' => $yer,
                    'recipesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Recipesxestablishment->recursive = 0;
        $this->set('recipesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Recipesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Recipesxestablishment.med_january) as m_jan, SUM(Recipesxestablishment.den_january) as d_jan, SUM(Recipesxestablishment.med_february) as m_feb, SUM(Recipesxestablishment.den_february) as d_feb, SUM(Recipesxestablishment.med_march) as m_mar, SUM(Recipesxestablishment.den_march) as d_mar, SUM(Recipesxestablishment.med_april) as m_apr, SUM(Recipesxestablishment.den_april) as d_apr, SUM(Recipesxestablishment.med_may) as m_may, SUM(Recipesxestablishment.den_may) as d_may, SUM(Recipesxestablishment.med_june) as m_jun, SUM(Recipesxestablishment.den_june) as d_jun, SUM(Recipesxestablishment.med_july) as m_jul, SUM(Recipesxestablishment.den_july) as d_jul,  SUM(Recipesxestablishment.med_august) as m_aug, SUM(Recipesxestablishment.den_august) as d_aug, SUM(Recipesxestablishment.med_september) as m_sep, SUM(Recipesxestablishment.den_september) as d_sep, SUM(Recipesxestablishment.med_october) as m_oct, SUM(Recipesxestablishment.den_october) as d_oct, SUM(Recipesxestablishment.med_november) as m_nov, SUM(Recipesxestablishment.den_november) as d_nov, SUM(Recipesxestablishment.med_december) as m_decem, SUM(Recipesxestablishment.den_december) as d_decem'),
                    'conditions' => array(
                        'Recipesxestablishment.year =' => $yir,
                        'Recipesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] + 
                     $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'];

            $this->loadModel('Recipe');
            $this->Recipe->query("UPDATE recipes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE recipes.regions_id = $region && recipes.year = $yir");
        } else {
            // Recipesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Recipesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Recipesxestablishment.med_january) as m_jan, SUM(Recipesxestablishment.den_january) as d_jan, SUM(Recipesxestablishment.med_february) as m_feb, SUM(Recipesxestablishment.den_february) as d_feb, SUM(Recipesxestablishment.med_march) as m_mar, SUM(Recipesxestablishment.den_march) as d_mar, SUM(Recipesxestablishment.med_april) as m_apr, SUM(Recipesxestablishment.den_april) as d_apr, SUM(Recipesxestablishment.med_may) as m_may, SUM(Recipesxestablishment.den_may) as d_may, SUM(Recipesxestablishment.med_june) as m_jun, SUM(Recipesxestablishment.den_june) as d_jun, SUM(Recipesxestablishment.med_july) as m_jul, SUM(Recipesxestablishment.den_july) as d_jul,  SUM(Recipesxestablishment.med_august) as m_aug, SUM(Recipesxestablishment.den_august) as d_aug, SUM(Recipesxestablishment.med_september) as m_sep, SUM(Recipesxestablishment.den_september) as d_sep, SUM(Recipesxestablishment.med_october) as m_oct, SUM(Recipesxestablishment.den_october) as d_oct, SUM(Recipesxestablishment.med_november) as m_nov, SUM(Recipesxestablishment.den_november) as d_nov, SUM(Recipesxestablishment.med_december) as m_decem, SUM(Recipesxestablishment.den_december) as d_decem'),
                    'conditions' => array(
                        'Recipesxestablishment.year =' => $yer,
                        'Recipesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] +
                     $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'];

            $this->loadModel('Recipe');
            $this->Recipe->query("UPDATE recipes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE recipes.regions_id = $region && recipes.year = $yer");
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
        if (!$this->Recipesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        $options = array('conditions' => array('Recipesxestablishment.' . $this->Recipesxestablishment->primaryKey => $id));
        $this->set('recipesxestablishment', $this->Recipesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Recipesxestablishment->create();
            if ($this->Recipesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The recipesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The recipesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Recipesxestablishment->Establishment->find('list');
        $sibases = $this->Recipesxestablishment->Sibase->find('list');
        $regions = $this->Recipesxestablishment->Region->find('list');
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
        if (!$this->Recipesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Recipesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Recipesxestablishment.' . $this->Recipesxestablishment->primaryKey => $id));
            $this->request->data = $this->Recipesxestablishment->find('first', $options);
        }
        $establishments = $this->Recipesxestablishment->Establishment->find('list');
        $sibases = $this->Recipesxestablishment->Sibase->find('list');
        $regions = $this->Recipesxestablishment->Region->find('list');
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
        $this->Recipesxestablishment->id = $id;
        if (!$this->Recipesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Recipesxestablishment->delete()) {
            $this->Flash->success(__('The recipesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The recipesxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
?>