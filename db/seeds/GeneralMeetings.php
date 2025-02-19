<?php

use Phinx\Seed\AbstractSeed;

class GeneralMeetings extends AbstractSeed
{
    public function run()
    {
        // Assemblées générales
        $data = [
            [
                'date' => 1635544800,
                'description' => 'Assemblée octobre 2021'
            ],
        ];

        $table = $this->table('afup_assemblee_generale');
        $table->truncate();
        $table
            ->insert($data)
            ->save()
        ;

        // Présences Assemblées générales
        $data = [
            [
                'id_personne_physique' => '1',
                'date' => 1635544800,
                'presence' => 1
            ],
        ];

        $table = $this->table('afup_presences_assemblee_generale');
        $table->truncate();
        $table
            ->insert($data)
            ->save()
        ;


        // Assemblées générales Questions
        $data = [
            [
                'date' => 1635544800,
                'label' => 'Une 1ère question. Alors d\'accord ?',
                'created_at' => '2021-09-01 10:42:42'
            ],
            [
                'date' => 1635544800,
                'label' => 'Une autre question pertinente. On vote ?',
                'created_at' => '2021-09-12 10:42:42'
            ],
        ];

        $table = $this->table('afup_assemblee_generale_question');
        $table->getAdapter()->execute('SET FOREIGN_KEY_CHECKS=0;');
        $table->truncate();
        $table->getAdapter()->execute('SET FOREIGN_KEY_CHECKS=1;');
        $table
            ->insert($data)
            ->save()
        ;
    }
}
