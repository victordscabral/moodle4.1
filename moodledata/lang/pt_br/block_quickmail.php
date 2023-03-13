<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_quickmail', language 'pt_br', version '4.1'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['additional_emails'] = 'Adicionar e-mails';
$string['additional_emails_help'] = 'Outros endereços de e-mail que você gostaria de adicionar a uma mesma mensagem, devem ser separados por "vírgula" ou "ponto e vírgula". Exemplo: email1@exemplo.com.br,email2@exemplo.com.br ou email1@exemplo.com.br;email2@exemplo.com.br';
$string['allowstudents'] = 'Permitir que os estudantes usem o Correio Eletrônico';
$string['alternate'] = 'E-mails alternativos';
$string['alternate_body'] = '<p>
{$a->fullname} adicionou o endereço {$a->address} como um endereço alternativo para o curso {$a->course}.
</p>

<p>
O propósito deste e-mail é verificar se este endereço existe e se o dono
deste endereço possui as permissões apropriadas no Moodle.
</p>

<p>
Se vocẽ deseja completar o processo de verificação, por favor acesse o
link: {$a->url}.
</p>

<p>
Se a descrição deste e-mail não faz sentido para você, você pode tê-la recebido
por engano. Simplesmente ignore esta mensagem.
</p>

Obrigado.';
$string['alternate_new'] = 'Adicionar endereço alternativo';
$string['alternate_subject'] = 'Validação de endereço de e-mail alternativo';
$string['backup_block_configuration'] = 'Backup  das definições da configuração de nínvel do bloco Quickmail (como [Permitir que os estudantes usem o Quickmail])';
$string['backup_history'] = 'Incluir histórico de mensagens';
$string['body'] = 'Mensagem';
$string['courseferpa'] = 'Respeitar a configuração de grupos';
$string['downloads'] = 'Exigir login para baixar os anexos';
$string['downloads_desc'] = 'Esta configuração determina se os anexos estão disponíveis apenas para usuários logados no Moodle';
$string['drafts'] = 'Rascunhos';
$string['eventalternateemailadded'] = 'E-mail alternativo adicionado';
$string['ferpa'] = 'FERPA(Group) Mode';
$string['ferpa_desc'] = 'Permite ao sistema ajustar-se de acordo com as configurações de grupo do curso, ignorando as configurações de grupo mas separando os grupos ou ignorando os grupos completamente.';
$string['no_alternates'] = 'Não foram encontrados e-mails alternativos para {$a->fullname}. Continue para adicionar um.';
$string['no_drafts'] = 'Você não possui rascunhos de e-mails.';
$string['noferpa'] = 'Não respeitar configuração de grupos';
$string['overwrite_history'] = 'Sobrescrever histórico de mensagens';
$string['pluginname'] = 'Correio eletrônico';
$string['prepend_class'] = 'Adicionar nome do curso como prefixo';
$string['prepend_class_desc'] = 'Adicionar o nome curto do curso como prefixo no assunto do e-mail.';
$string['quickmail:addinstance'] = 'Adicionar um novo bloco Correio Eletrônico';
$string['quickmail:allowalternate'] = 'Permite aos usuários adicionar e-mails alternativos (externos ao curso) no formulário de envio de e-mails.';
$string['quickmail:canconfig'] = 'Permite os usuários configurar a instância do Correio Eletrônico.';
$string['quickmail:cansend'] = 'Permite os usuários encaminhar e-mails através do Correio Eletrônico';
$string['quickmail:myaddinstance'] = 'Adicionar um novo Correio Eletrônico à Minha página inicial';
$string['receipt'] = 'Receber uma cópia';
$string['receipt_help'] = 'Receber uma cópia do e-mail enviado';
$string['restore_history'] = 'Restaurar histórico de mensagens';
$string['save_draft'] = 'Salvar rascunho';
$string['signature'] = 'Assinatura';
$string['status'] = 'status';
$string['strictferpa'] = 'Sempre separar os grupos';
$string['subject'] = 'Assunto';
$string['title'] = 'Título';
