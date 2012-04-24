<?php
App::uses('TestimonialsAppModel', 'Testimonials.Model');
/**
 * Testimonial Model
 *
 */
class Testimonial extends TestimonialsAppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'author';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'copy' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'author' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'link' => array(
			'url' => array(
				'rule' => array('url'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

    /**
     * Get a random testimonial
     *
     * @return array
     */
    public function getRandom()
    {
        return $this->find('first', array(
            'recursive' => 0,
            'order' => 'rand()',
        ));
    }
}
