class Solution:
    def twoSum(self, numbers: list[int], target: int) -> list[int]:
        ret = [0,0]
        hash1 = {numbers[i]:i for i in range(len(numbers))}

        for j in range( len( numbers)):
            req = target - numbers[j] 
            if req in hash1.keys():
                ret = [j+1, hash1[req]+1]
                break
            else:
                continue
            break
        return ret
        
numbers = [2,11,15,7]
target = 9

sol = Solution()
ret = sol.twoSum( numbers, target )

print( ret );