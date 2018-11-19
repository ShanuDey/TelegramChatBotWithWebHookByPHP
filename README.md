# TelegramChatBotWithWebHookByPHP
This is my way to replying some persons. This is the bot no ML no AI. Only static reply with webhook to save time.

# Installation
open telegram and search for botfather
type /newbot and give a valid name 
after getting token you are ready to move next.
Host this files in HTTPS server (you can use ngrok)
https://api.telegram.org/bot{my_bot_token}/setWebhook?url={url_to_send_updates_to}
visit this url with proper bot token and call back url (note: callback url must be https)
https://api.telegram.org/bot{my_bot_token}/getWebhookInfo
visit this url with proper bot token and check your callback url or error
all set enjoy you chat bot with static reply.
