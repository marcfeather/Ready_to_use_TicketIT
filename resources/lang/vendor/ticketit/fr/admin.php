<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Gestion',
  'nav-agents'                    => 'Agents',
  'nav-dashboard'                 => 'Tableau de bord',
  'nav-categories'                => 'Catégories',
  'nav-priorities'                => 'Priorités',
  'nav-statuses'                  => 'Statuts',
  'nav-configuration'             => 'Configuration système',
  'nav-administrator'             => 'Administrateurs',  //new
  'nav-users'                     => 'Utilisateurs',

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nom',
  'table-action'                  => 'Actions',
  'table-categories'              => 'Catégories',
  'table-join-category'           => 'Catégories joint :',
  'table-email'                   => 'Email',
  'table-isadministrator'         => 'Administrateur',
  'table-isagent'                 => 'Agent',
  'table-created_at'              => 'Créé le',
  'table-updated_at'              => 'Modifié le',
  'table-remove-user'             => 'Supprimer',
  'table-remove-agent'            => 'Supprimer',
  'table-remove-administrator'    => 'Supprimer', // New

  'table-slug'                    => 'Nom paramètre',
  'table-default'                 => 'Valeur par défaut',
  'table-value'                   => 'Ma valeur',
  'table-lang'                    => 'Langue',
  'table-edit'                    => 'Editer',

  'btn-back'                      => 'Retour',
  'btn-delete'                    => 'Supprimer',
  'btn-edit'                      => 'Editer',
  'btn-join'                      => 'Joindre',
  'btn-remove'                    => 'Supprimer',
  'btn-submit'                    => 'Confirmer',
  'btn-save'                      => 'Sauvegarder',
  'btn-update'                    => 'Mettre à jour',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Tickets System Dashboard',
  'index-empty-records'                 => 'Aucun ticket !',
  'index-total-tickets'                 => 'Tickets au total',
  'index-open-tickets'                  => 'Tickets ouverts',
  'index-closed-tickets'                => 'Tickets résolus',
  'index-performance-indicator'         => 'Indicateur de performance',
  'index-periods'                       => 'Périodes',
  'index-3-months'                      => '3 mois',
  'index-6-months'                      => '6 mois',
  'index-12-months'                     => '12 mois',
  'index-tickets-share-per-category'    => 'Tickets par catégories',
  'index-tickets-share-per-agent'       => 'Tickets par agent',
  'index-categories'                    => 'Categories',
  'index-category'                      => 'Categories',
  'index-agents'                        => 'Agents',
  'index-agent'                         => 'Agent',
  'index-administrators'                => 'Administrateurs',  //new
  'index-administrator'                 => 'Administrateur',  //new
  'index-users'                         => 'Utilisateurs',
  'index-user'                          => 'Utilisateur',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Ouvert(s)',
  'index-closed'                        => 'Résolu(s)',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mois',
  'index-performance-chart'             => 'Nombre de jours en moyenne pour résoudre un ticket ?',
  'index-categories-chart'              => '',
  'index-agents-chart'                  => '',

// tickets-admin/agent/____
  'agent-index-title'             => 'Gestion des Agents',
  'btn-create-new-agent'          => 'Créer nouvel agent',
  'agent-index-no-agents'         => 'Il n\'y à pas d\'agent !',
  'agent-index-create-new'        => 'Ajout agent',
  'agent-create-title'            => 'Ajout agent',
  'agent-create-add-agents'       => 'Ajout agent',
  'agent-create-no-users'         => 'Il n`\y à pas de compte utilisateur, veuillez en créer un avant tout.',
  'agent-create-select-user'      => 'Sélectionnez un compte utilisateur pour l\'ajouter en tant qu\'agent.',

// tickets-admin/users/ _______
  'user-index-title'              => 'Gestion des Utilisateurs',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Gestion des Administrateurs',  //new
  'btn-create-new-administrator'                => 'Créer nouvel administrateur',  //new
  'administrator-index-no-administrators'       => 'Il n\'y à pas d\'administrateur !',  //new
  'administrator-index-create-new'              => 'Ajout administrateur',  //new
  'administrator-create-title'                  => 'Ajout administrateur',  //new
  'administrator-create-add-administrators'     => 'Ajout administrateur',  //new
  'administrator-create-no-users'               => 'Il n`\y à pas de compte utilisateur, veuillez en créer un avant tout.',  //new
  'administrator-create-select-user'            => 'Sélectionnez un compte utilisateur pour l\'ajouter en tant qu\'administrateur.',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Gestion des Catégories',
  'btn-create-new-category'       => 'Créer nouvel catégorie',
  'category-index-no-categories'  => 'Il n\'y à pas de catégorie !',
  'category-index-create-new'     => 'Créer nouvel catégorie',
  'category-index-js-delete'      => 'Êtes vous sûr de vouloir supprimer la catégorie : ',
  'category-create-title'         => 'Créer nouvel catégorie',
  'category-create-name'          => 'Nom',
  'category-create-color'         => 'Couleur',
  'category-edit-title'           => 'Editer catégorie : :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Gestion des Priorités',
  'btn-create-new-priority'       => 'Créer nouvel priorité',
  'priority-index-no-priorities'  => 'Il n\'y à pas de priorité ! ',
  'priority-index-create-new'     => 'Créer nouvel priorité',
  'priority-index-js-delete'      => 'Êtes vous sûr de vouloir supprimer la priorité : ',
  'priority-create-title'         => 'Créer nouvel priorité',
  'priority-create-name'          => 'Nom',
  'priority-create-color'         => 'Couleur',
  'priority-edit-title'           => 'Editer priorité : :name',

// tickets-admin/status/____
  'status-index-title'            => 'Gestion des Statuts',
  'btn-create-new-status'         => 'Créer nouveau statut',
  'status-index-no-statuses'      => 'There are no statues,',
  'status-index-create-new'       => 'Créer nouveau statut',
  'status-index-js-delete'        => 'Êtes vous sûr de vouloir supprimer le statut : ',
  'status-create-title'           => 'Créer nouveau statut',
  'status-create-name'            => 'Nom',
  'status-create-color'           => 'Couleur',
  'status-edit-title'             => 'Editer statuts : :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Configuration des paramatrès',
  'config-index-subtitle'         => 'Paramètres',
  'btn-create-new-config'         => 'Ajout d\'un paramètre',
  'config-index-no-settings'      => 'Il n\'y à pas de paramètres',
  'config-index-initial'          => 'Général',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Email',
  'config-index-permissions'      => 'Permissions',
  'config-index-editor'           => 'Editeur', //Added: 2016.01.14
  'config-index-other'            => 'Autres',
  'config-create-title'           => 'Créer: nouveau paramètre global',
  'config-create-subtitle'        => 'Créer paramètre',
  'config-edit-title'             => 'Editer: Configuration global',
  'config-edit-subtitle'          => 'Editer paramètre',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Nom paramètre',
  'config-edit-default'           => 'Valeur par défaut',
  'config-edit-value'             => 'Ma valeur',
  'config-edit-language'          => 'Langage',
  'config-edit-unserialize'       => 'Obtenez et modifier les valeurs du tableau',
  'config-edit-serialize'         => 'Obtenez la chaîne des valeurs modifiées (à entrer dans le domaine)',
  'config-edit-should-serialize'  => 'Publier', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'Lorsqu\'elle est cochée, le serveur exécute eval()!
  									  Ne pas utiliser la fonction eval() si elle est désactivé sur votre serveur ou si vous ne savez pas exactement ce que vous faites!
                      Code exacte exécuté:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Veuillez de nouveau rentrer votre mot de passe', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Mot de passe non indentique !', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Valeur invalide', //Added: 2016-01-16
  'config-edit-tools'             => 'Outils :',

];
