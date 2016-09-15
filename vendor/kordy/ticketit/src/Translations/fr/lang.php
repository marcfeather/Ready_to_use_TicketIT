<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets Ouverts',
  'nav-completed-tickets'            => 'Tickets Résolus',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Sujet',
  'table-owner'                      => 'Créateur',
  'table-status'                     => 'Statut',
  'table-last-updated'               => 'Dernière modification',
  'table-priority'                   => 'Priorité',
  'table-agent'                      => 'Agent',
  'table-category'                   => 'Catégorie',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Pas de données disponible !',
  'table-info'                       => 'Montrer _START_ à _END_ de _TOTAL_ tickets',
  'table-info-empty'                 => 'Montrer 0 à 0 de 0 tickets',
  'table-info-filtered'              => '(filtré _MAX_ tickets total)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Montrer _MENU_ tickets',
  'table-loading-results'            => 'Patientez...',
  'table-processing'                 => 'Patientez...',
  'table-search'                     => 'Rechercher :',
  'table-zero-records'               => 'Aucune données trouvées',
  'table-paginate-first'             => 'Premier',
  'table-paginate-last'              => 'Dernier',
  'table-paginate-next'              => 'Suivant',
  'table-paginate-prev'              => 'Précédent',
  'table-aria-sort-asc'              => ': activer pour trier la colonne ascendante',
  'table-aria-sort-desc'             => ': activer pour trier la colonne descendante',

  'btn-back'                         => 'Retour',
  'btn-cancel'                       => 'Annuler', // NEW
  'btn-close'                        => 'Fermer',
  'btn-delete'                       => 'Supprimer',
  'btn-edit'                         => 'Editer',
  'btn-mark-complete'                => 'Marquer comme "résolu"',
  'btn-submit'                       => 'Confirmer',

  'agent'                            => 'Agent',
  'category'                         => 'Catégorie',
  'colon'                            => ': ',
  'comments'                         => 'Commentaires',
  'created'                          => 'Date de création',
  'description'                      => 'Description',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Dernière mise à jour',
  'no-replies'                       => 'Pas de réponse.',
  'owner'                            => 'Créateur',
  'priority'                         => 'Priorité',
  'reopen-ticket'                    => 'Réouvrir ticket',
  'reply'                            => 'Répondre',
  'responsible'                      => 'Responsable',
  'status'                           => 'Statut',
  'subject'                          => 'Sujet',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Page principal HelpDesk',

// tickets/____
  'index-my-tickets'                 => 'Mes tickets',
  'btn-create-new-ticket'            => 'Créer nouveau ticket',
  'index-complete-none'              => 'Il n\'y à pas de ticket résolu !',
  'index-active-check'               => 'Assurez-vous de vérifier les tickets ouverts si vous ne pouvez pas trouver votre ticket.',
  'index-active-none'                => 'Il n\'y à pas de ticket actif,',
  'index-create-new-ticket'          => 'Créer nouveau ticket',
  'index-complete-check'             => 'Assurez-vous de vérifier les tickets résolu si vous ne pouvez pas trouver votre ticket.',

  'create-ticket-title'              => 'Nouveau formulaire de ticket',
  'create-new-ticket'                => 'Créer nouveau ticket',
  'create-ticket-brief-issue'        => 'Entrez une brève description de votre ticket.',
  'create-ticket-describe-issue'     => 'Décrivez votre problème en détail ici !',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Êtes-vous sûr de vouloir le supprimer : ',
  'show-ticket-modal-delete-title'   => 'Delete Ticket',
  'show-ticket-modal-delete-message' => 'Êtes-vous sûr de vouloir supprimer le ticket : :subject ?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Les agents :names ont été ajoutés aux agents !',
  'administrators-are-added-to-administrators'      => 'Les administrateurs :names ont été ajoutés aux administrateurs', //New
  'agents-joined-categories-ok'                     => 'Catégorie joint avec succès !',
  'agents-is-removed-from-team'                     => 'Suppression de l\'agent :name de l\'équipe agent',
  'administrators-is-removed-from-team'             => 'Suppression du/des administrateur\s :name de l\'équipe administrateur', // New

// UserController
  'users-is-removed-from-team'      => 'Suppression de l\'utilisateur réussi !',
  'user-forget-password'            => 'Mot de passe oublié ?',
  'create-new-user'                 => 'Créer Utilisateur',

// CategoriesController
  'category-name-has-been-created'   => 'La catégorie :name à bien été créé !',
  'category-name-has-been-modified'  => 'La catégorie :name à bien été modifié !',
  'category-name-has-been-deleted'   => 'La catégorie :name à bien été supprimé !',

// PrioritiesController
  'priority-name-has-been-created'   => 'La priorité :name à bien été créé !',
  'priority-name-has-been-modified'  => 'La priorité :name à bien été modifié !',
  'priority-name-has-been-deleted'   => 'La priorité :name à bien été supprimé !',
  'priority-all-tickets-here'        => 'Tous les tickets liés aux priorités sont ici !',

// StatusesController
  'status-name-has-been-created'   => 'Le statut :name à bien été créé !',
  'status-name-has-been-modified'  => 'Le statut :name hà bien été modifié !',
  'status-name-has-been-deleted'   => 'Le statut :name à bien été supprimé !',
  'status-all-tickets-here'        => 'Tous les tickets liés aux statuts sont ici !',

// CommentsController
  'comment-has-been-added-ok'        => 'Le commentaire à été envoyé avec succès !',

// NotificationsController
  'main-notify-text'                 => '[Lake²Dev] ',
  'notify-new-comment-from'          => 'Nouveau commentaire sur votre ticket #',
  'notify-status-to-complete'        => ' - Résolu ',
  'notify-status-to'                 => ' - ',
  'notify-transferred'               => 'Transfert du ticket #',
  'notify-created-ticket'            => 'Création du ticket #',
  'notify-updated'                   => 'Mise à jour de votre ticket #',

  'notify-on'                        => ' sur ',
  'notify-to-you'                    => ' à vous ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Le ticket à bien été crée !',
  'the-ticket-has-been-modified'     => 'Le ticket à bien été modifié !',
  'the-ticket-has-been-deleted'      => 'Le ticket :name à bien été supprimé !',
  'the-ticket-has-been-completed'    => 'Le ticket :name à bien été résolu !',
  'the-ticket-has-been-reopened'     => 'Le ticket :name à bien été ré-ouvert !',
  'you-are-not-permitted-to-do-this' => 'Vous n\'avez pas accès à cette action !',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Vous n\'avez pas l\'accès à cette page !'];
