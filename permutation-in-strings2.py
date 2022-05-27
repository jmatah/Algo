class Solution:
    def getmap(self, str1:str )->list[int]:
        ret = [0] * 26
        for i in range(len(str1)):
            ret[ord(str1[i])-ord('a')] = ret[ord(str1[i])-ord('a')] + 1 if ret[ord(str1[i])-ord('a')] else 1

        return ret

    def checkInclusion(self, s1: str, s2: str) -> bool:
        len1 = len(s1)
        str1 = self.getmap(s1)
        str2 = self.getmap(s2[:len(s1)])

        if str1 == str2:
            return True

        for i in range(len(s2)-len(s1)):
            str2[ord(s2[i])-ord('a')] -= 1
            str2[ord(s2[(i+len(s1))])-ord('a')] += 1

            if str1 == str2:
                return True

        return False
