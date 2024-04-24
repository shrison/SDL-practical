require 'mail'

Mail.defaults do
  delivery_method :smtp, {
    address: 'smtp.gmail.com',
    port: 587,
    user_name: 'example_email@gmail.com',
    password: 'hjur vfop iqqa elnl',
    authentication: :login,
    enable_starttls_auto: true
  }
end

message = Mail.new do
  from 'deyash966@gmail.com'
  to 'yash.deshmane21@pccoepune.org'
  subject 'Hello from Ruby!'
  body 'This is a test email sent from Ruby.'
end

message.deliver!