<?php
    /**
     * CodeIgniter
     *
     * An open source application development framework for PHP
     *
     * This content is released under the MIT License (MIT)
     *
     * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy
     * of this software and associated documentation files (the "Software"), to deal
     * in the Software without restriction, including without limitation the rights
     * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
     * copies of the Software, and to permit persons to whom the Software is
     * furnished to do so, subject to the following conditions:
     *
     * The above copyright notice and this permission notice shall be included in
     * all copies or substantial portions of the Software.
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
     * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
     * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
     * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
     * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
     * THE SOFTWARE.
     *
     * @package      CodeIgniter
     * @author       EllisLab Dev Team
     * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
     * @copyright    Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
     * @license      http://opensource.org/licenses/MIT	MIT License
     * @link         https://codeigniter.com
     * @since        Version 1.0.0
     * @filesource
     */
    defined('BASEPATH') OR exit('No direct script access allowed');

    $lang['email_must_be_array']         = 'O método de validação de email deve ser passado em uma matriz.';
    $lang['email_invalid_address']       = 'Endereço de email invalido: %s';
    $lang['email_attachment_missing']    = 'Não é possível localizar o seguinte anexo de email: %s';
    $lang['email_attachment_unreadable'] = 'Não é possível abrir este anexo: %s';
    $lang['email_no_from']               = 'Não é possível enviar email sem o cabeçalho.';
    $lang['email_no_recipients']         = 'ocê deve incluir destinatários: Para, Cc ou Cco';
    $lang['email_send_failure_phpmail']  = 'Não é possível enviar e-mail usando o PHP mail (). Seu servidor pode não estar configurado para enviar e-mails usando esse método.';
    $lang['email_send_failure_sendmail'] = 'Não é possível enviar e-mail usando o PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mails usando esse método.';
    $lang['email_send_failure_smtp']     = 'Não é possível enviar e-mail usando o PHP SMTP. Seu servidor pode não estar configurado para enviar e-mails usando esse método.';
    $lang['email_sent']                  = 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: %s';
    $lang['email_no_socket']             = 'Não é possível abrir um soquete para o Sendmail. Por favor, verifique as configurações.';
    $lang['email_no_hostname']           = 'Você não especificou um nome de host SMTP.';
    $lang['email_smtp_error']            = 'O seguinte erro SMTP foi encontrado: %s';
    $lang['email_no_smtp_unpw']          = 'Erro: você deve atribuir um nome de usuário e senha SMTP.';
    $lang['email_failed_smtp_login']     = 'Falha ao enviar o comando AUTH LOGIN. Erro: %s';
    $lang['email_smtp_auth_un']          = 'Falha ao autenticar o nome de usuário. Erro: %s';
    $lang['email_smtp_auth_pw']          = 'Falha ao autenticar a senha. Erro: %s';
    $lang['email_smtp_data_failure']     = 'Não é possível enviar dados: %s';
    $lang['email_exit_status']           = 'Sair do código de status: %s';