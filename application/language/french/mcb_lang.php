<?php
/**
 * French locale
 * 
 * PHP Version 5.4
 * 
 * @category Locale
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$lang['actions'] = 'Actions';
$lang['active_client'] = 'Client actif';
$lang['add'] = 'Ajouter';
$lang['add_client'] = 'Ajouter un client';
$lang['add_contact'] = 'Ajouter un contact';
$lang['add_invoice_group'] = 'Ajouter un groupe de factures';
$lang['add_invoice_item'] = 'Ajouter un produit à la facture';
$lang['add_invoice_payment'] = 'Ajouter un paiement';
$lang['add_invoice_status'] = 'Ajouter un état';
$lang['add_payment_method'] = 'Ajouter un moyen de paiement';
$lang['add_tax_rate'] = 'Ajouter une taxe';
$lang['adjust_invoice_id'] = 'Modifier l\'identifiant de la facture';
$lang['all_clients'] = 'Tous les clients';
$lang['amount'] = 'Montant';
$lang['amount_cannot_exceed_invoice_balance']
    = 'Le montant du paiement ne peut pas dépasser le solde de la facture.';
$lang['amount_operator'] = 'Opérateur';
$lang['amount_paid'] = 'Montant payé';
$lang['application'] = 'Application';
$lang['application_settings'] = 'Paramètres de l\'application';
$lang['application_version'] = 'Version de l\'application';
$lang['author'] = 'Auteur';
$lang['balance'] = 'Solde';
$lang['bcc'] = 'Copie cachée';
$lang['body'] = 'Corps';
$lang['cancel'] = 'Annuler';
$lang['cancelled'] = 'Annulé';
$lang['cannot_delete_default_tax_rate']
    = 'La taxe par défaut ne peut pas être supprimée.';
$lang['cannot_delete_tax_rate']
    = 'Cette taxe ne peut pas être supprimée tant
        qu\'elle est associée à des factures.';
$lang['cannot_delete_user_account']
    = 'Vous ne pouvez pas supprimer ce compte utilisateur';
$lang['cash'] = 'Liquide';
$lang['cc'] = 'Copie';
$lang['change_invoice_logo'] = 'Modifier le logo de la facture';
$lang['change_password'] = 'Modifier le mot de passe';
$lang['changing_template_name']
    = 'Le fait de modifier un template existant ne le renommera,
        mais créera une copie de ce template.';
$lang['check'] = 'Chèque';
$lang['choose_an_invoice'] = 'Choisir une facture';
$lang['city'] = 'Ville';
$lang['client'] = 'Client';
$lang['client_delete_warning']
    = 'Le fait de supprimer ce client supprimera également
        toutes les factures et paiements associés.
        Êtes-vous sûr de vouloir supprimer ce client
        et toutes les données associées ?';
$lang['client_form'] = 'Ajout de client';
$lang['client_name'] = 'Nom du client';
$lang['clients'] = 'Clients';
$lang['close'] = 'Fermer';
$lang['closed'] = 'Fermé';
$lang['company_name'] = 'Nom de l\'entreprise';
$lang['confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer cette entrée ?';
$lang['contact_form'] = 'Ajout de contact';
$lang['contacts'] = 'Contacts';
$lang['continue'] = 'Continuer';
$lang['cost'] = 'Coût';
$lang['country'] = 'Pays';
$lang['create_invoice'] = 'Créer une facture';
$lang['create_invoice_status'] = 'Créer un état de facture';
$lang['create_user_account'] = 'Créer un compte utilisateur';
$lang['created_by'] = 'Créé par';
$lang['created_invoice'] = 'Facture créée';
$lang['credit'] = 'Crédit';
$lang['csv'] = 'CSV';
$lang['currency'] = 'Monnaie';
$lang['currency_symbol'] = 'Symbole de la monnaie';
$lang['currency_symbol_after']
    = 'Inclure le symbole de la monnaire après le montant';
$lang['currency_symbol_before']
    = 'Inclure le symbole de la monnaire avant le montant';
$lang['currency_symbol_placement'] = 'Currency Symbol Placement';
$lang['custom_modules'] = 'Modules personnalisés';
$lang['dashboard'] = 'Tableau de bord';
$lang['dashboard_override'] = 'Remplacer le tableau de bord';
$lang['dashboard_show_closed_invoices'] = 'Afficher les factures récemment closes';
$lang['dashboard_show_open_invoices'] = 'Afficher les factures en cours';
$lang['dashboard_show_overdue_invoices'] = 'Afficher les factures impayées';
$lang['dashboard_show_pending_invoices']
    = 'Afficher les factures en attente de paiement';
$lang['database_backup'] = 'Sauvegarde de la base de données';
$lang['database_config_copy_paste']
    = 'Copiez et collez le texte ci-dessous dans le fichier suivant&nbsp;:';
$lang['database_config_file_error']
    = 'Il semblerait que le texte ci-dessous n\'a pas été correctement
        copié dans le fichier database.php. Veuillez réessayer.';
$lang['database_configuration'] = 'Configuration de la base de données';
$lang['database_connect_error']
    = 'Un problème est survenu lors de la configuration de la base de données.
        Veuillez vérifier les paramètres ci-dessous et réessayer.';
$lang['database_name'] = 'Nom de la base de données';
$lang['database_optimized'] = 'Base de données optimisée';
$lang['database_password'] = 'Mot de passe de la base de données';
$lang['database_select_error']
    = 'Un problème est survenu lors de la sélection de la base de données.
        Veuillez vérifier les paramètres ci-dessous et réessayer.';
$lang['database_server'] = 'Serveur de la base de données';
$lang['database_username'] = 'Utilisateur de la base de données';
$lang['date'] = 'Date';
$lang['date_closed'] = 'Date de clôture';
$lang['date_entered'] = 'Date d\'ajout';
$lang['date_format'] = 'Format de date';
$lang['decimal_symbol'] = 'Symbol des décimales';
$lang['default_bcc'] = 'Copie cachée par défaut';
$lang['default_cc'] = 'Copie par défaut';
$lang['default_closed_invoice_status'] = 'État par défaut des factures closes';
$lang['default_invoice_template'] = 'Template de facture par défaut';
$lang['default_open_invoice_status'] = 'État par défaut des factures ouvertes';
$lang['default_quote_template'] = 'Template de devis par défaut';
$lang['default_receipt_template'] = 'Template de reçu par défaut';
$lang['delete'] = 'Supprimer';
$lang['delete_invoice_logo'] = 'Supprimer le logo de la facture';
$lang['delete_quote'] = 'Supprimer le devis';
$lang['deleted_invoice'] = 'Facture supprimée';
$lang['description'] = 'Description';
$lang['details'] = 'Détails';
$lang['discount'] = 'Remise';
$lang['due_date'] = 'Échéance';
$lang['edit'] = 'Éditer';
$lang['email'] = 'Email';
$lang['email_address'] = 'Adresse email';
$lang['email_error'] = 'Un problème est survenu durant l\'envoi de l\'email.';
$lang['email_settings'] = 'Paramètres d\'email';
$lang['email_success'] = 'L\'email a été envoyé avec succès.';
$lang['emailed_invoice'] = 'Facture envoyée';
$lang['enter_payment'] = 'Ajouter un paiement';
$lang['fax_number'] = 'Numéro de fax';
$lang['first_name'] = 'Prénom';
$lang['from'] = 'Depuis';
$lang['from_date'] = 'Du';
$lang['from_email'] = 'Avec l\'email';
$lang['from_name'] = 'De la part de';
$lang['generate'] = 'Générer';
$lang['generate_invoice'] = 'Générer une facture';
$lang['generate_report'] = 'Générer un rapport';
$lang['generated_invoice_html'] = 'Générer une facture HTML';
$lang['generated_invoice_pdf'] = 'Générer une facture PDF';
$lang['global_administrator'] = 'Administrateur global';
$lang['grand_total'] = 'Total général';
$lang['group_left_pad'] = 'Nombre de chiffres minimum';
$lang['group_next_id'] = 'Identifiant suivant';
$lang['history'] = 'Historique';
$lang['html'] = 'HTML';
$lang['i_agree'] = 'Je suis d\'accord';
$lang['id'] = 'Identifiant';
$lang['include_logo_on_invoice'] = 'Inclure le logo sur la facture';
$lang['include_quotes'] = 'Inclure les devis';
$lang['include_tax_id_invoice'] = 'Inclure la taxe sur la facture';
$lang['install'] = 'Installer';
$lang['install_admin_account_problem']
    = 'Un problème est survenu lors de la création du compte administrateur.
        L\'installation va maintenant s\'arrêter.';
$lang['install_admin_account_success']
    = 'Le compte administrateur a été créé avec succès';
$lang['install_already_current']
    = 'Cette installation est à jour. Il n\'y a rien à mettre à jour.';
$lang['install_database_problem']
    = 'Un problème est survenu lors de la création
        des tables de la base de données.
        L\'installation va maintenant s\'arrêter.';
$lang['install_database_success']
    = 'Les tables de la base de données ont été créées avec succès.';
$lang['install_delete_folder']
    = 'Il est fortement recommandé de supprimer le dossier suivant&nbsp;:';
$lang['installation'] = 'Installation';
$lang['installation_complete'] = 'L\'installation est terminée.';
$lang['installation_status'] = 'État de l\'installation';
$lang['invoice'] = 'Facture';
$lang['invoice_balance'] = 'Solde de la facture';
$lang['invoice_date'] = 'Date de la facture';
$lang['invoice_group'] = 'Groupe de facture';
$lang['invoice_group_form'] = 'Édition d\'un groupe de facture';
$lang['invoice_groups'] = 'Groupes de facture';
$lang['invoice_history'] = 'Historique de la facture';
$lang['invoice_item_form'] = 'Édition de produit';
$lang['invoice_items'] = 'Produits de la facture';
$lang['invoice_logo'] = 'Logo de la facture';
$lang['invoice_number'] = 'Facture n°';
$lang['invoice_options_saved']
    = 'Les paramètres de la facture ont été enregistrés.';
$lang['invoice_payments'] = 'Paiements';
$lang['invoice_search'] = 'Recherche';
$lang['invoice_settings'] = 'Paramètres de facturation';
$lang['invoice_status'] = 'État';
$lang['invoice_status_form'] = 'Édition d\'état';
$lang['invoice_status_type'] = 'Type d\'état';
$lang['invoice_statuses'] = 'États';
$lang['invoice_summary_report'] = 'Résumé des factures';
$lang['invoice_summary_report_options'] = 'Options du résumé';
$lang['invoice_summary_report_results'] = 'Rapport';
$lang['invoice_tax'] = 'Taxe';
$lang['invoice_template'] = 'Template de facture';
$lang['invoice_template_form'] = 'Édition de template de facture';
$lang['invoice_templates'] = 'Templates de facture';
$lang['invoices'] = 'Factures';
$lang['invoices_due_after'] = 'Factures arrivant à échéance dans (jours)';
$lang['item'] = 'Produit';
$lang['item_date'] = 'Date du produit';
$lang['item_description'] = 'Description du produit';
$lang['item_name'] = 'Nom du produit';
$lang['item_subtotal'] = 'Sous-total du produit';
$lang['item_tax'] = 'Taxe du produit';
$lang['invoice_tax_option_1'] = 'Appliquer avant la taxe du produit';
$lang['invoice_tax_option_2'] = 'Appliquer après la taxe du produit';
$lang['items'] = 'Produits';
$lang['language'] = 'Langue';
$lang['last_name'] = 'Nom de famille';
$lang['license_agreement'] = 'Accord de licence';
$lang['log_in'] = 'Connexion';
$lang['log_out'] = 'Déconnexion';
$lang['mobile_number'] = 'Portable';
$lang['module_upgrade_available']
    = 'Un ou plusieurs modules personnalisés doivent être mis à jour.';
$lang['modules'] = 'Modules';
$lang['myclientbase'] = 'SimpleQuoteManager';
$lang['name'] = 'Nom';
$lang['new_client'] = 'Nouveau client';
$lang['new_password'] = 'Nouveau mot de passe';
$lang['new_password_verify'] = 'Nouveau mot de passe (vérification)';
$lang['next'] = 'Suivant';
$lang['no_invoices_for_payment']
    = 'Il n\'y a actuellement aucune facture pour laquelle ajouter un paiement';
$lang['no_records_found'] = 'Aucune entrée trouvée';
$lang['no_tax'] = 'Aucune taxe';
$lang['none'] = 'Aucun';
$lang['note'] = 'Note';
$lang['notes'] = 'Notes';
$lang['of'] = 'sur';
$lang['open'] = 'Ouvert';
$lang['open_invoices'] = 'Factures ouvertes';
$lang['optimize_database'] = 'Optimisze la base de données';
$lang['output_type'] = 'Type de sortie';
$lang['overdue_invoices'] = 'Factures impayées';
$lang['page'] = 'Page';
$lang['paid'] = 'Payé';
$lang['password'] = 'Mot de passe';
$lang['password_verify'] = 'Mot de passe (vérifier)';
$lang['payment'] = 'Paiement';
$lang['payment_date'] = 'Date du paiement';
$lang['payment_form'] = 'Paiement';
$lang['payment_method'] = 'Moyen de paiement';
$lang['payment_method_form'] = 'Édition de moyen de paiement';
$lang['payment_methods'] = 'Moyens';
$lang['payment_receipt'] = 'Reçu de paiement';
$lang['payment_receipt_template_form'] = 'Édition de template de reçu de paiement';
$lang['payment_receipt_templates'] = 'Templates de reçu de paiement';
$lang['payment_settings'] = 'Paramètres de paiement';
$lang['payments'] = 'Paiements';
$lang['pdf'] = 'PDF';
$lang['pending'] = 'En attente de paiement';
$lang['pending_invoices'] = 'Factures en attente de paiement';
$lang['phone_number'] = 'Téléphone';
$lang['php_mail_function'] = 'Fonction mail de PHP';
$lang['preview'] = 'Aperçu';
$lang['print'] = 'Imprimer';
$lang['protocol'] = 'Protocole';
$lang['provide_to_install']
    = 'Remplissez les informations ci-dessous pour installer SimpleQuoteManager';
$lang['quantity'] = 'Quantité';
$lang['quicklinks'] = 'Liens rapides';
$lang['quote'] = 'Devis';
$lang['quote_number'] = 'Devis n°';
$lang['quote_only'] = 'Devis uniquement';
$lang['quote_to_invoice'] = 'Convertir en facture';
$lang['quotes'] = 'Devis';
$lang['recalculate_invoices'] = 'Recalculer les factures';
$lang['receipt_number'] = 'Reçu n°';
$lang['receipt_templates'] = 'Templates de reçus';
$lang['recently_closed_invoices'] = 'Factures récemment closes';
$lang['record_does_not_exist'] = 'L\'entrée n\'existe pas';
$lang['save_item'] = 'Enregistrer le produit';
$lang['save_options'] = 'Enregistrer';
$lang['save_settings'] = 'Enregistrer les paramètres';
$lang['saved_invoice'] = 'Facture enregistrée';
$lang['saved_invoice_options'] = 'Options enregistrées';
$lang['search'] = 'Rechercher';
$lang['security'] = 'Sécurité';
$lang['select_file'] = 'Sélectionner un fichier';
$lang['send_email'] = 'Envoyer l\'email';
$lang['sendmail'] = 'Sendmail';
$lang['sendmail_path'] = 'Chemin vers Sendmail';
$lang['setup'] = 'Configuration';
$lang['shipping'] = 'Frais de port';
$lang['simple_increment'] = 'Incrémentation simple';
$lang['smtp'] = 'SMTP';
$lang['smtp_host'] = 'Adresse du serveur SMTP';
$lang['smtp_password'] = 'Mot de passe SMTP';
$lang['smtp_port'] = 'Port SMTP';
$lang['smtp_timeout'] = 'Délai d\'attente SMTP';
$lang['smtp_user'] = 'Utilisateur SMTP';
$lang['start_date'] = 'Date de début';
$lang['state'] = 'État';
$lang['status'] = 'État';
$lang['street_address'] = 'Adresse postale';
$lang['street_address_2'] = 'Adresse postale 2';
$lang['subject'] = 'Sujet';
$lang['submit'] = 'Envoyer';
$lang['subtotal'] = 'Sous-total';
$lang['summary'] = 'Résumé';
$lang['system'] = 'Système';
$lang['system_settings'] = 'Paramètres système';
$lang['system_settings_saved'] = 'Les paramètres système ont été enregistrés.';
$lang['tags'] = 'Tags';
$lang['tax'] = 'Taxe';
$lang['tax_and_discounts'] = 'Taxe/remise';
$lang['tax_and_other'] = 'Taxes et divers';
$lang['tax_id_number'] = 'Identifiant de la taxe';
$lang['tax_rate'] = 'Taxe';
$lang['tax_rate_decimals'] = 'Décimales dans les taxes';
$lang['tax_rate_form'] = 'Édition de taxe';
$lang['tax_rate_name'] = 'Nom de la taxe';
$lang['tax_rate_option_1'] = 'Apply to Invoice Amount';
$lang['tax_rate_option_2'] = 'Apply to Amount After Previous Tax';
$lang['tax_rate_percent'] = 'Taux';
$lang['tax_rates'] = 'Taxes';
$lang['taxable'] = 'Taxable';
$lang['taxes'] = 'Taxes';
$lang['template'] = 'Template';
$lang['template_cannot_be_deleted']
    = 'Il s\'agit du seul template existant et il ne peut donc pas être supprimé.';
$lang['template_content'] = 'Contenu du template';
$lang['template_dir_not_writable']
    = 'Le répertoire des templates doit être accessible en écriture
        pour pouvoir utiliser l\'éditeur de templates.';
$lang['template_name'] = 'Nom du template';
$lang['this_item_has_been_deleted'] = 'Ce produit a été supprimé';
$lang['this_item_has_been_saved'] = 'Ce produit a été enregistré';
$lang['thousands_separator'] = 'Séparateur de milliers';
$lang['title'] = 'Titre';
$lang['to'] = 'Pour';
$lang['to_date'] = 'Au';
$lang['total'] = 'Total';
$lang['total_balance'] = 'Solde total';
$lang['total_billed'] = 'Total facturé';
$lang['total_due'] = 'Total dû';
$lang['total_paid'] = 'Total payé';
$lang['total_tax'] = 'Total des taxes';
$lang['uninstall'] = 'Désinstaller';
$lang['unit'] = 'Unité';
$lang['unit_price'] = 'Prix à l\'unité';
$lang['update'] = 'Mise à jour';
$lang['upgrade'] = 'Mise à jour';
$lang['upgrade_complete'] = 'La mise à jour est terminée.';
$lang['upgrade_database_backup']
    = 'Il est recommandé de faire une sauvegarde de la base de données
        avant de mettre à jour. Vous pouvez mettre à jour la base de données
        ci-dessous puis mettre à jour.';
$lang['upgrade_status'] = 'État de la mise à jour';
$lang['upload_another_invoice_logo'] = 'Uploader un autre logo de facture';
$lang['upload_invoice_logo'] = 'Uploader un logo de facture';
$lang['user'] = 'Utilisateur';
$lang['user_account_form'] = 'Édition de compte utilisateur';
$lang['user_accounts'] = 'Comptes utilisateurs';
$lang['username'] = 'Nom d\'utilisateur';
$lang['version'] = 'Version';
$lang['view'] = 'Afficher';
$lang['view_all'] = 'Tout afficher';
$lang['view_clients'] = 'Afficher les clients';
$lang['view_invoice_groups'] = 'Afficher les groupes de factures';
$lang['view_invoice_items'] = 'Afficher les produits';
$lang['view_invoice_statuses'] = 'Afficher les états';
$lang['view_invoice_templates'] = 'Afficher les templates de facture';
$lang['view_invoices'] = 'Afficher les factures';
$lang['view_payments'] = 'Afficher les paiements';
$lang['view_quotes'] = 'Afficher les devis';
$lang['view_tax_rates'] = 'Afficher les taxes';
$lang['view_user_accounts'] = 'Afficher les comptes utilisateurs';
$lang['web_address'] = 'URL';
$lang['zip'] = 'Code postal';

/* NEW FOR 0.9.0 */
$lang['add_custom_field'] = 'Add Custom Field';
$lang['custom_field_form'] = 'Custom Field Form';
$lang['custom_fields'] = 'Custom Fields';
$lang['default_invoice_group'] = 'Default Invoice Group';
$lang['display_quantity_decimals'] = 'Display Quantity Decimals';
$lang['field_name'] = 'Field Name';
$lang['general'] = 'General';
$lang['group_name'] = 'Group Name';
$lang['group_prefix'] = 'Static Prefix';
$lang['group_prefix_month'] = 'Month Prefix';
$lang['group_prefix_year'] = 'Year Prefix';
$lang['invoice_as_body'] = 'Invoice as Body';
$lang['object'] = 'Object';
$lang['results_per_page'] = 'Results per Page';
$lang['select'] = 'Select';
$lang['view_custom_fields'] = 'View Custom Fields';

/* NEW FOR 0.9.1 */
$lang['days_overdue'] = 'Jours de retard';
$lang['days_until_due'] = 'Jours avant échéance';
$lang['default_email_body'] = 'Facture comme corps de l\'email par défaut';
$lang['default_invoice_tax_placement'] = 'Emplacement des taxes par défaut';
$lang['default_item_tax_rate'] = 'Taxe de produit par défaut';
$lang['disable_invoice_audit_history'] = 'Désactiver l\'historique';
$lang['edit_client'] = 'Éditer le client';
$lang['invoice_is_overdue'] = 'Cette facture est en retard';
$lang['overdue'] = 'En retard';
$lang['receipt_as_body'] = 'Reçu comme corps';

/* NEW FOR 0.9.2 */
/**
 * Changed: $lang['default_tax_rate'] = "Default Tax Rate";
*/
$lang['default_invoice_tax_rate'] = 'Taxe par défaut';

/**
 * Changed: $lang['pdf_plugin'] = "PDF Plugin";
*/
$lang['pdf_helper'] = 'Bibliothèque PDF';

/* NEW FOR 0.9.4 */
$lang['application_title'] = 'Titre de l\'application';
$lang['create_quote'] = 'Créer un devis';
$lang['cron_key'] = 'Clef cron';
$lang['email_reminders'] = 'Rappels par email';
$lang['enable_profiler'] = 'Activer le profileur';
$lang['generate_cron_key'] = 'Générer une clef cron';
$lang['overdue_invoice_reminder'] = 'Rappel de facture en retard';
$lang['password_recovery'] = 'Réinitialisation du mot de passe';
$lang['password_recovery_email']
    = 'Une réinitialisation du mot de passe a été demandée
        pour votre compte SimpleQuoteManager.
        Votre nouveau mot de passe est&nbsp;: ';
$lang['password_recovery_email_2'] = 'Cliquez ici pour vous connecter';
$lang['recover_email'] = 'Consultez vos emails pour la suite des instructions.';
$lang['recover_text']
    = 'Entrez votre nom d\'utilisateur ci-dessous pour réinitialiser
        votre mot de passe. Un email va être envoyé
        à l\'adresse associée à ce compte.';
$lang['select_invoices'] = 'Sélection des factures';
$lang['trouble_logging_in'] = 'Problème de connexion ?';
$lang['unassigned'] = 'Non-assigné';
$lang['username_or_pw_incorrect']
    = 'Votre nom d\'utilisateur ou votre mot de passe sont incorrectes.';

/* NEW FOR 0.9.4.1 */
$lang['item_tax_rate'] = 'Taux de la taxe du produit';
$lang['item_tax_option'] = 'Options de la taxe du produit';
// These two items are changed below in 0.9.6
//$lang['item_tax_option_0'] = 'Add to Total';
//$lang['item_tax_option_1'] = 'Include in Total';

/* NEW FOR 0.9.4.2 */
$lang['default_quote_group'] = 'Groupe de devis par défaut';
$lang['group'] = 'Groupe';

/* NEW FOR 0.9.4.3 */
$lang['add_inventory_item'] = 'Ajouter un produit à l\'inventaire';
$lang['adjust_stock'] = 'Ajuster le stock';
$lang['choose_inventory']
    = 'Choisissez un produit de l\'inventaire ou ajoutez un produit ci-dessous';
$lang['client_list'] = 'Liste des clients';
$lang['client_statement'] = 'Rapport client';
$lang['include_closed_invoices'] = 'Inclure les factures closes';
$lang['inventory'] = 'Inventaire';
$lang['inventory_history'] = 'Historique de l\'inventaire';
$lang['inventory_item_form'] = 'Édition de produit de l\'inventaire';
$lang['inventory_items'] = 'Produits de l\'inventaire';
$lang['inventory_sales'] = 'Ventes de l\'inventaire';
$lang['inventory_type'] = 'Type de produit';
$lang['inventory_type_form'] = 'Édition de type de produit';
$lang['inventory_types'] = 'Types de produit';
$lang['price'] = 'Prix';
$lang['report'] = 'Rapport';
$lang['reports'] = 'Rapports';
$lang['sales_report'] = 'Rapport des ventes';
$lang['save_as_inventory'] = 'Enregistrer le produit dans l\'inventaire';
$lang['settings'] = 'Paramètres';
$lang['stock'] = 'Stock';
$lang['track_stock'] = 'Suivi du stock';
$lang['type'] = 'Type';
$lang['view_inventory'] = 'Afficher l\'inventaire';
$lang['view_inventory_types'] = 'Afficher les types de produits';
$lang['view_inventory_groups'] = 'Afficher les groupes de produits';
/* MIGRATED TO CORE FOR CLIENT CENTER */
$lang['allow_client_login'] = 'Autoriser les clients à se connecter';
$lang['allow_clients_change_data']
    = 'Autoriser les clients à modifier les données suivantes';
$lang['allow_login_password_required']
    = 'The Password field is required when the Allow Login option is selected.';
$lang['allow_login_username_required']
    = 'The Username field is required when the Allow Login option is selected.';
$lang['client_center'] = 'Interface client';
$lang['client_center_form'] = 'Édition de compte client';
$lang['client_currency_symbol'] = 'Symbole de la monnaie du client';
$lang['client_currency_symbol_placement']
    = 'Placement du symbole de la monnaie du client';
$lang['client_generated_invoice_html'] = 'Facture HTML générée par le client';
$lang['client_generated_invoice_pdf'] = 'Facture PDF générée par le client';
$lang['client_language'] = 'Langue du client';
$lang['client_login'] = 'Connexion client';
$lang['client_options'] = 'Options du client';
$lang['create_account'] = 'Compte du client';
$lang['last_login'] = 'Dernière connexion';
$lang['my_account'] = 'Mon compte';
$lang['username_already_exists']
    = 'Le nom d\'utilisateur entré existe déjà. Veuillez en choisir un autre.';
$lang['username_password_required']
    = 'Le champ mot de passe est requis
        lorsque le nom d\'utilisateur n\'est pas vide.';
$lang['view_accounts'] = 'Afficher les comptes';

/* NEW FOR 0.9.4.4 */
$lang['total_paid_widget_cutoff_date'] = 'Date limite du widget Total payé';

/* NEW FOR 0.9.5 */
$lang['apply_invoice_tax'] = 'Appliquer les taxes';
$lang['email_footer'] = 'Pied de page de l\'email';
$lang['footer'] = 'Pied de page';
$lang['inventory_type_in_use']
    = 'Le type de produit spécifié est déjà utilisé.';

/* NEW FOR 0.9.6 (0.10)*/
//$lang['item_tax_option_0'] = 'Add to Total';
//$lang['item_tax_option_1'] = 'Include in Total';
$lang['account_deposits'] = 'Dépôts sur le compte';
$lang['apply_credit'] = 'Appliquer le crédit';
$lang['calendar_view'] = 'Vue calendrier';
$lang['control_center'] = 'Centre de contrôle';
$lang['copy'] = 'Copier';
$lang['credit_amount'] = 'Montant du crédit';
$lang['dashboard_show_quotes'] = 'Afficher les devis';
$lang['email_body_template'] = 'Template de corps par défaut';
$lang['email_footer_template'] = 'Template de pied de page par défaut';
$lang['enter_deposit'] = 'Ajouter un dépôt';
$lang['initial_stock_quantity'] = 'Initial Stock Quantity';
$lang['invoice_count'] = 'Nombre de factures';
$lang['item_tax_option_0'] = 'Ajouter au montant';
$lang['item_tax_option_1'] = 'Inclure dans le montant';
$lang['list_view'] = 'Vue liste';
$lang['my_profile'] = 'Mon profil';
$lang['sales'] = 'Ventes';
$lang['sales_with_tax'] = 'Ventes avec taxes';
$lang['sales_by_customer'] = 'Ventes par client';

/* Calendar */
$lang['calendarToday'] = 'Aujourd\\\'hui';
$lang['calendarDay'] = 'Jour';
$lang['calendarWeek'] = 'Semaine';
$lang['calendarMonth'] = 'Mois';
$lang['months']
    = array(
        "Janvier","Février","Mars","Avril","Mai","Juin",
        "Juillet","Août","Septembre","Octobre","Novembre","Décembre"
    );
$lang['monthsShort']
    = array(
        "Jan","Fev","Mar","Avr","Mai","Juin",
        "Juil","Août","Sep","Oct","Nov","Dec"
    );
$lang['days']
    = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$lang['daysShort'] = array("Dim","Lun","Mar","Mer","Jeu","Ven","Sam");

/* NEW FOR 0.11 */
$lang['active'] = 'Actif';
$lang['amount_greater_than_zero'] = 'Le montant doit être supérieur à zéro.';
$lang['default_invoice_email_template'] = 'Template d\'email de facture par défaut';
$lang['default_item_tax_option'] = 'Option de taxe de produit par défaut';
$lang['default_overdue_invoice_email_template']
    = 'Template par défaut d\'email de facture impayée';
$lang['default_payment_method'] = 'Moyen de paiement par défaut';
$lang['email_body'] = 'Corps de l\'email';
$lang['email_footer'] = 'Pied de page de l\'email';
$lang['email_template_form'] = 'Édition de template  d\'email';
$lang['email_template_title'] = 'Titre du template';
$lang['email_templates'] = 'Templates d\'email';
$lang['merchant_account_id'] = 'Merchant Account ID';
$lang['merchant_currency_code'] = 'Merchant Currency Code';
$lang['merchant_driver'] = 'Merchant Driver';
$lang['merchant_enabled'] = 'Merchant Enabled';
$lang['merchant_online_payment'] = 'Online Payment';
$lang['merchant_pay_online'] = 'Pay Online';
$lang['merchant_payment_cancelled'] = 'Votre paiement a été annulé.';
$lang['merchant_payment_finished'] = 'Merci pour votre paiement.';
$lang['merchant_test_mode'] = 'Merchant Test Mode';
$lang['no'] = 'Non';
$lang['off'] = 'Off';
$lang['on'] = 'On';
$lang['yes'] = 'Oui';

/* NEW FOR 0.12 */
$lang['clear'] = 'Vider';
$lang['default_apply_invoice_tax'] = 'Appliquer la taxe aux produits par défaut';
$lang['group_by'] = 'Grouper par';
$lang['payment_entered'] = 'Un paiement de %s a été appliqué';

?>
