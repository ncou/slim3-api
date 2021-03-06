<?php

namespace App\Services;

class MessageRepository
{
    public $messages = [
        'USER-0001' => [
            'code'   => 'USER-0001',
            'status' => 409,
            'title'  => 'Email conflict',
            'detail' => 'That email address is already in use. <a href="/reset-password">Need to reset your password?</a>'
        ],
        'USER-0002' => [
            'code'   => 'USER-0002',
            'status' => 201,
            'title'  => 'User created',
            'detail' => 'An activation link has been sent to the email address you supplied, along with instructions for activating your account.'
        ],
        'USER-0003' => [
            'code'   => 'USER-0003',
            'status' => 404,
            'title'  => 'User not found',
            'detail' => 'The requested user was not found on this server.'
        ],
        'USER-0004' => [
            'code'   => 'USER-0004',
            'status' => 400,
            'title'  => 'Bad password',
            'detail' => 'Password mismatch. Unable to update the user password.'
        ],
        'USER-0005' => [
            'code'   => 'USER-0005',
            'status' => 200,
            'title'  => 'User updated',
            'detail' => 'User account updated successfully.'
        ],
        'USER-0006' => [
            'code'   => 'USER-0006',
            'status' => 200,
            'title'  => 'User activated',
            'detail' => 'User account activated. You may now login with your email address and password.'
        ],
        'USER-0007' => [
            'code'   => 'USER-0007',
            'status' => 400,
            'title'  => 'User activation failed',
            'detail' => 'User account activation failed. <a href="/lost-password">Need to reset your password?</a>'
        ],
        'USER-0008' => [
            'code'   => 'USER-0008',
            'status' => 400,
            'title'  => 'Signin failed',
            'detail' => 'Signin failed. Check your email address and password. <a href="/lost-password">Need to reset your password?</a>'
        ],
        'USER-0009' => [
            'code'   => 'USER-0009',
            'status' => 400,
            'title'  => 'User not active',
            'detail' => 'Signin failed. This account has not been activated yet. Please check your email for activation instructions. <a href="/lost-password">Need to reset your password?</a>'
        ],
        'USER-0010' => [
            'code'   => 'USER-0010',
            'status' => 200,
            'title'  => 'Signin successful',
            'detail' => 'Signin successful.'
        ],
        'USER-0011' => [
            'code'   => 'USER-0011',
            'status' => 201,
            'title'  => 'Reset request submitted',
            'detail' => 'Password reset request submitted. Check your email for further instructions.'
        ],
        'USER-0012' => [
            'code'   => 'USER-0012',
            'status' => 404,
            'title'  => 'Reset request not found',
            'detail' => 'Password reset request not found. Please submit a password reset request first.'
        ],
        'USER-0013' => [
            'code'   => 'USER-0013',
            'status' => 400,
            'title'  => 'Reset request expired',
            'detail' => 'Password reset request has expired. Please submit another request.'
        ],
        'USER-0014' => [
            'code'   => 'USER-0014',
            'status' => 200,
            'title'  => 'Password updated',
            'detail' => 'Password updated. You may now login with your new password.'
        ],
        'USER-0015' => [
            'code'   => 'USER-0015',
            'status' => 400,
            'title'  => 'Current password not specified',
            'detail' => 'You must enter your current password in order to change your password.'
        ],
        'USER-0016' => [
            'code'   => 'USER-0016',
            'status' => 404,
            'title'  => 'Not found',
            'detail' => 'No results found.'
        ],
        'USER-0017' => [
            'code'   => 'USER-0017',
            'status' => 500,
            'title'  => 'Unable to save user account',
            'detail' => 'A database error has occurred. Unable to save user account.'
        ],
        'USER-0018' => [
            'code'   => 'USER-0018',
            'status' => 500,
            'title'  => 'User account created but unable to send activation email',
            'detail' => 'An email error has occurred. Although your account was created we are unable to send an activation email.'
        ],
        'USER-0019' => [
            'code'   => 'USER-0019',
            'status' => 500,
            'title'  => 'Unable to activate user account',
            'detail' => 'A database error has occurred. Unable to activate user account.'
        ],
        'USER-0020' => [
            'code'   => 'USER-0020',
            'status' => 500,
            'title'  => 'Unable to save user reset request',
            'detail' => 'A database error has occurred. Unable to save user reset request.'
        ],
        'USER-0021' => [
            'code'   => 'USER-0021',
            'status' => 500,
            'title'  => 'User reset request created but unable to send email',
            'detail' => 'An email error has occurred. Although your password reset request was created we are unable to send an activation email.'
        ],
        'USER-0022' => [
            'code'   => 'USER-0022',
            'status' => 500,
            'title'  => 'Unable to update user password',
            'detail' => 'A database error has occurred. Unable to update user password.'
        ],
        'USER-0023' => [
            'code'   => 'USER-0023',
            'status' => 500,
            'title'  => 'Unable to update user information',
            'detail' => 'A database error has occurred. Unable to update user information.'
        ],
        // AUTH
        'AUTH-0001' => [
            'code'   => 'AUTH-0001',
            'status' => 500,
            'title'  => 'Internal authentication error',
            'detail' => 'Please provide a valid state (authenticated or anonymous) to check against.'
        ],
        'AUTH-0002' => [
            'code'   => 'AUTH-0002',
            'status' => 401,
            'title'  => 'Authentication error',
            'detail' => 'Access denied. You must be authorized to access the resource.'
        ],
        'AUTH-0003' => [
            'code'   => 'AUTH-0003',
            'status' => 403,
            'title'  => 'Authentication error',
            'detail' => 'Access denied. You must be anonymous in order to access the resource.'
        ],
        'AUTH-0004' => [
            'code'   => 'AUTH-0004',
            'status' => 401,
            'title'  => 'Authentication error',
            'detail' => 'Access denied. You must have valid authorization in order to access the resource.'
        ],
        'AUTH-0005' => [
            'code'   => 'AUTH-0005',
            'status' => 200,
            'title'  => 'Token updated',
            'detail' => 'The authentication token has been updated.'
        ],
    ];
}
